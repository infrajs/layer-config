import { External } from '/vendor/infrajs/controller/src/External.js'
import { Template } from '/vendor/infrajs/template/Template.js'
/*
	configinherit:(bool)
*/
let Config = {}
Config.init = function () {
	External.add('configtpl', function (now, ext, layer, external, i) {
		if (!now) return ext;
		return now;
	});
}
Config.tpl = function (layer) {
	var name = 'config';//stencil//
	var nametpl = name + 'tpl';
	if (layer[nametpl]) {
		if (!layer[name]) layer[name] = {};
		for (var i in layer[nametpl]) {
			layer[name][i] = Template.parse([layer[nametpl][i]], layer);
		}
	}
}
Config.inherit = function (layer) {
	if (layer.configinherit) {
		layer.config = layer.parent.config;
		delete layer.configinherit;
	}
}

export {Config}