Event.one('Infrajs.oninit', function (layer){
	infrajs.configinit();
}, 'config');

Event.handler('layer.oninit',function(layer){
	//config
	infrajs.configinherit(layer);
}, 'config:external');

Event.handler('layer.oncheck', function (layer){
	//config
	infrajs.configtpl(layer);
}, 'config:counter');