const form = document.getElementById('form');
const usuario = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
	if(checkInputs() == false){
		alert("Los datos no se ingresaron correctamente");
		e.preventDefault();
	}
});

function checkInputs() {
	const usuarioValue = usuario.value.trim();
	const emailValue = email.value.trim();
	const passwordValue = password.value.trim();
	const password2Value = password2.value.trim();
	correct = true
	 
	if(usuarioValue === '') {
		setErrorFor(usuario, 'No puede dejar el usuario en blanco');
		correct = false
	} else {
		setSuccessFor(usuario);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'No puede dejar el email en blanco');
		correct = false
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'No ingreso un email válido');
		correct = false
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password no debe quedar en blanco.');
		correct = false
	} else {
		setSuccessFor(password);
	}
	
	if(password2Value === '') {
		setErrorFor(password2, 'Password2 no debe quedar en blanco');
		correct = false
	} else if(passwordValue !== password2Value) {
		setErrorFor(password2, 'Passwords no coinciden');
		correct = false
	} else{
		setSuccessFor(password2);
	}

	return correct
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}