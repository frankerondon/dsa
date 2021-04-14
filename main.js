$(document).ready(function(){
	//console.log(jsonUrls);
	//var arrayUrlparseado= JSON.parse(jsonUrls);
	//console.log(arrayUrlparseado);
	
	
	//Si me agarra la redireccion
	//window.location.replace("https://hotmail.com");
	/*
	window.open('https://hotmail.com', '_blank');
	window.open('https://google.com', '_blank');
	window.open('https://bing.com', '_blank');
	window.open('https://yandex.com', '_blank');
	*/
	//Si me abre multiples tabs como yo queria
	
	//var arrsUrlsnews = JSON.stringify(jsonUrls);				//JSON.parse me da error
	//console.log(arrsUrlsnews);
	
	
	for (var clave in jsonUrls){
		if (jsonUrls.hasOwnProperty(clave)){
			//console.log(jsonUrls[clave]);
			window.open(jsonUrls[clave], '_blank');
			
		}
	}
});