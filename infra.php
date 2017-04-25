<?php
namespace infrajs\layer\config;
use infrajs\event\Event;
use infrajs\path\Path;
use infrajs\config\Config;
Config::get('controller');
Event::handler('Controller.oninit', function () {
	Lconfig::init();
});
Event::handler('Layer.oninit', function (&$layer) {
	Lconfig::configinherit($layer);
}, 'config');

Event::handler('Layer.oncheck', function (&$layer) {
	Lconfig::configtpl($layer);
}, 'config:external');

