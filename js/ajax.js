;(function(){
	//
	window.ajax=function(option){
		
		option.type=option.type||"get";
		option.dataType=option.dataType||"json";
		var ajax=new XMLHttpRequest();
		ajax.open(option.type,option.url);
		if(option.type=="post"){
			ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			ajax.send(option.data);
		}
		else{
			ajax.send();
		}
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4&&ajax.status==200){
				var data=ajax.responseText;
				if(option.dataType==="json"){
					data=JSON.parse(data);
				}
				//关键，异步回调函数，获取数据后再将数据传回
				option.success(data);
			}
		}
	}
})();
