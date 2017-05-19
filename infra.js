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
}, 'Layer'); //config должен сформироваться до начала всех остальных обработок. Чтобы jsontpl мог уже использовать config
