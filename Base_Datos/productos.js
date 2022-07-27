function tomar_datos(){
	cve_prod=document.f_productos.cve_prod.value;
	nom_prod=document.f_productos.nom_prod.value;
	tipo_prod=document.f_productos.tipo_prod.value;
	presenta_prod=document.f_productos.presenta_prod.value;
	img_prod=document.f_productos.img_prod.value;
	des_prod=document.f_productos.des_prod.value;
}

function altas(){
	tomar_datos();
	//alert(cve_prod+" "+nom_prod+" "+tipo_prod+" "+presenta_prod+"des_prod");
	if ((cve_prod.length==0) || (nom_prod.length==0) || (tipo_prod.length==0) || (presenta_prod.length==0) || (img_prod.length==0) || (des_prod.length==0)){
		alert("Error, todos los campos son obligatorios");
		if (cve_prod.length==0) document.f_productos.cve_prod.style.background="red";
		if (nom_prod.length==0) document.f_productos.nom_prod.style.background="red";
		if (tipo_prod.length==0) document.f_productos.tipo_prod.style.background="red";
		if (presenta_prod.length==0) document.f_productos.presenta_prod.style.background="red";
		if (img_prod.length==0) document.f_productos.img_prod.style.background="red";
		if (des_prod.length==0) document.f_productos.des_prod.style.background="red";
	}
	else{
		document.f_productos.cve_prod.style.background="blue";
		document.f_productos.nom_prod.style.background="blue";
		document.f_productos.tipo_prod.style.background="blue";
		document.f_productos.presenta_prod.style.background="blue";
		document.f_productos.img_prod.style.background="blue";
		document.f_productos.des_prod.style.background="blue";
		url="productos.php?op=1&cve_prod="+cve_prod+"&nom_prod="+nom_prod;
		url=url+"&tipo_prod="+tipo_prod+"&presenta_prod="+presenta_prod+"&img_prod="+img_prod+"&des_prod="+des_prod;
		location.href=url;
	}
} // Termina altas

function consultas(){
	tomar_datos();
	if (cve_prod.length==0){
		alert("Error, se debe indicar la clave de producto a consultar");
		document.f_productos.cve_prod.style.background="red";
	}
	else{
		document.f_productos.cve_prod.style.background="blue";
		nom_prod="";
		tipo_prod="";
		presenta_prod="";
		img_prod="";
		des_prod="";
		url="productos.php?op=3&cve_prod="+cve_prod+"&nom_prod="+nom_prod;
		url=url+"&tipo_prod="+tipo_prod+"&presenta_prod="+presenta_prod+"&img_prod="+img_prod+"&des_prod="+des_prod;
		location.href=url;
	}
} // Termina consultas

function bajas(){
	tomar_datos();
	if (cve_prod.length==0){
		alert("Error, se debe indicar la clave de producto a eliminar");
		document.f_productos.cve_prod.style.background="red";
	}
	else{
		document.f_productos.cve_prod.style.background="blue";
		nom_prod="";
		tipo_prod="";
		presenta_prod="";
		img_prod="";
		des_prod="";
		if (confirm("Seguro de Eliminar ??")){
			url="productos.php?op=2&cve_prod="+cve_prod+"&nom_prod="+nom_prod;
			url=url+"&tipo_prod="+tipo_prod+"&presenta_prod="+presenta_prod+"&img_prod="+img_prod+"&des_prod="+des_prod;
			location.href=url;
		}
		else{
			alert("La acción de BAJA ha sido CANCELADA");
		}
	}
} // Termina bajas

function cambios(){
	tomar_datos();
	if (cve_prod.length==0){
		alert("Error, se debe indicar la clave de producto a modificar");
		document.f_productos.cve_prod.style.background="red";
	}
	else{
		document.f_productos.cve_prod.style.background="blue";
		url="productos.php?op=4&cve_prod="+cve_prod+"&nom_prod="+nom_prod;
		url=url+"&tipo_prod="+tipo_prod+"&presenta_prod="+presenta_prod+"&img_prod="+img_prod+"&des_prod="+des_prod;
		location.href=url;
	}
} // Termina cambios