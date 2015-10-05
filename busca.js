function openAjax(){
	var ajax;
	try{
		ajax = new XMLHttpRequest;
	}catch(erro){
		try{
			ajax = new ActiveXObject("Msxl2.XMLHTTP");
		}catch(ee){
			tray{
				ajax = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				ajax = false;
			}
		}
	}return ajax;
}//instancia dinamicamente o objeto XMLHttpRequest

function (busca){
	if(document.getElementById){
		var termo = document.getElementById('q').value; //1 = valor do input
		var exibeResultado = document.getElementById('resultado'); //nome da div que exibira os resultados
		if(termo !== "" && termo !== null && termo.length>=1){
			var ajax = openAjax();
			ajax.open("GET", "busca-cliente.php?q="+termo, true);
			ajax.onreadystatechange = function(){
				if(ajax.readyState == 1){
				exibeResultado.innerHTML = '<p>Carregando resultados...</p>';
				}
				if(ajax.readyState == 4){
					if(ajax.status == 200){
						var resultado = ajax.responseText;
						resultado = resultado.replace(/\+g/," ");
						resultado = unescape(resultado);
						exibeResultado.innerHTML = resultado;	
					}else{
						exibeResultado.innerHTML = '<p>Ouve algum erro</p>';
					}
				}
			}ajax.send(null);			
		}
	}
}