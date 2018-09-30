var modal = document.getElementById('modal');
var login = document.getElementById('login');
var singUp = document.getElementById('singUp');
var cerrar = document.getElementById('cerrar');
var registrarse = document.getElementById('registrarse');

singUp.addEventListener('click',() => {
	modal.className = "modal modalVisible";
	document.body.style.overflow = "hidden";
	// elbody.style.background = "blue";
	
});
registrarse.addEventListener('click',() => {
	modal.className = "modal modalVisible";
	document.body.style.overflow = "hidden";
});


cerrar.addEventListener('click',() => {
	modal.className = "modal";
	form1.className = "container__input container__input--visible";
	form2.className = "container__input";
	form3.className = "container__input";
	document.body.style.overflow = "visible";
})


// otro punto, el felicidades y el formulario de usuario

var form1 = document.getElementById("container__input1");
var form2 = document.getElementById("container__input2");
var form3 = document.getElementById("container__input3");

var btnLogin = document.getElementById("modal__login");
var agregar = document.getElementById("modal__cargar");

btnLogin.addEventListener("click", () => {
	// alert( "hola");
	form1.className = "container__input";
	form2.className = "container__input container__input--visible";
	form3.className = "container__input";
})

agregar.addEventListener("click", () => {
	form1.className = "container__input";
	form2.className = "container__input";	
	form3.className = "container__input container__input--visible";
})


