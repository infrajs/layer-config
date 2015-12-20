<?php
namespace infrajs\controller;
use infrajs\event\Event;
use infrajs\path\Path;
use infrajs\infra\Config;
Config::get('controller');
Event::handler('oninit', function () {
	ext\config::init();
});
Event::handler('layer.oninit', function (&$layer) {
	ext\config::configinherit($layer);
}, 'config');

Event::handler('layer.oncheck', function (&$layer) {
	ext\config::configtpl($layer);
}, 'config:external');

