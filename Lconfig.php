<?php

/*
	config
	configinherit:(bool)
*/

namespace infrajs\layer\config;

use infrajs\controller\External;
use infrajs\template\Template;

class Lconfig
{
	public static function configtpl(&$layer)
	{
		$name = 'config';//stencil//
		$nametpl = $name.'tpl';
		if (isset($layer[$nametpl])) {
			if (!isset($layer[$name])) {
				$layer[$name] = array();
			}
			foreach ($layer[$nametpl] as $i => $v) {
				$layer[$name][$i] = Template::parse(array($layer[$nametpl][$i]), $layer);
			}
		}
	}
	public static function init()
	{
		External::add('configtpl', function &(&$now, &$ext, &$layer, &$external, $i) {
			//if(!isset($layer['configtpl']))return $now;
			//if(isset($layer['config']))return $now;
			if (!$now) {
				return $ext;
			}

			return $now;
		});
	}
	public static function configinherit(&$layer)
	{
		if (empty($layer['configinherit'])) return;
		if (empty($layer['parent'])) return;
		if (empty($layer['parent']['config'])) return;
		$layer['config'] = $layer['parent']['config'];
		unset($layer['configinherit']);
	}
}
