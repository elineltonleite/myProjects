function maiusculo(id){
	var ucase = document.getElementById(id).value.toUpperCase()
		document.getElementById(id).value= ucase;
}

function ocultarForm(){
	document.getElementById('frm').style.display="none";
}
function ocultarMenuImagem(){
	document.getElementById('l1').style.display="none";
	document.getElementById('l2').style.display="none";
}
function ocultarMenuAdicionar(){
	document.getElementById('l5').style.display="none";
} 
function ocultarMenuAudio(){
	document.getElementById('l3').style.display="none";
	document.getElementById('l4').style.display="none";
}

ocultarMenuAudio();
ocultarMenuImagem();
ocultarMenuAdicionar();


document.getElementById('bx1').onclick = function(){
	ocultarMenuAudio();
	ocultarMenuAdicionar();
	document.getElementById('h3Menu').innerHTML="Manipular Imagem";
	document.getElementById('l1').style.display="block";
	document.getElementById('l2').style.display="block";
	ocultarForm();
}

document.getElementById('bx2').onclick = function(){
	ocultarMenuImagem();
	ocultarMenuAdicionar();
	document.getElementById('h3Menu').innerHTML="Manipular Audio";
	document.getElementById('l3').style.display="block";
	document.getElementById('l4').style.display="block";
	ocultarForm();
}
document.getElementById('bx3').onclick = function(){
	ocultarMenuImagem();
	ocultarMenuAudio();
	document.getElementById('h3Menu').innerHTML="Outros";
	document.getElementById('l5').style.display="block";
	ocultarForm();
}


//função adiciona formulário via ajax
function loadDoc(arquivo){

	if (window.XMLHttpRequest) {
		// code for modern browsers
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for old IE browsers
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("mainPrincipal").innerHTML = this.responseText;
		}
	}
	xmlhttp.open("POST","./app/views/forms/"+arquivo+".php",true);
	xmlhttp.send();
}
