
import { Event } from '/vendor/infrajs/event/Event.js'
import { Config } from '/vendor/infrajs/layer-config/Config.js'
Event.one('Controller.oninit', function (layer){
	Config.init();
}, 'config');

Event.handler('Layer.oninit',function(layer){
	//config
	Config.inherit(layer);
}, 'config:external');

Event.handler('Layer.oncheck', function (layer){
	//config
	Config.tpl(layer);
}, 'Layer'); //config должен сформироваться до начала всех остальных обработок. Чтобы jsontpl мог уже использовать config
