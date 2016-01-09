<?php
namespace infrajs\layer\config;
use infrajs\event\Event;
use infrajs\path\Path;
use infrajs\config\Config;
Config::get('controller');
Event::handler('oninit', function () {
	Lconfig::init();
});
Event::handler('layer.oninit', function (&$layer) {
	Lconfig::configinherit($layer);
}, 'config');

Event::handler('layer.oncheck', function (&$layer) {
	Lconfig::configtpl($layer);
}, 'config:external');

