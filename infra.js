Event.one('Controller.oninit', function (layer){
	infrajs.configinit();
}, 'config');

Event.handler('Layer.oninit',function(layer){
	//config
	infrajs.configinherit(layer);
}, 'config:external');

Event.handler('Layer.oncheck', function (layer){
	//config
	infrajs.configtpl(layer);
}, 'config:counter');