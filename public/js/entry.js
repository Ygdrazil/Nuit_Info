const form = document.getElementById('form');
const email = document.getElementById('email');
const username = document.getElementById('username');
const namee = document.getElementById('name');
const surname = document.getElementById('surname');
const password = document.getElementById('password');
const confirm_password = document.getElementById('confirm_password');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const emailValue = email.value.trim();
    const usernameValue = username.value.trim();
	const nameValue = namee.value.trim();
    const surnameValue = surname.value.trim();
	const passwordValue = password.value.trim();
	const confirm_passwordValue = confirm_password.value.trim();
	
    //email
    if(emailValue === '') {
        setErrorFor(email, 'Veuillez renseigner un email');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'L\'email n\'est pas valide');
    } else {
        setSuccessFor(email);
    }
    
    //username
	if(usernameValue === '') {
		setErrorFor(username, 'Veuillez renseigner un nom d\'utilisateur');
	} else {
		setSuccessFor(username);
	}

    //name
    if(nameValue === '') {
		setErrorFor(username, 'Veuillez renseigner votre prénom');
	} else {
		setSuccessFor(username);
	}

    //surname
    if(surnameValue === '') {
		setErrorFor(username, 'Veuillez renseigner votre nom');
	} else {
		setSuccessFor(username);
	}
	
    //password
	if(passwordValue === '') {
		setErrorFor(password, 'Veuillez renseigner un nom mot de passe');
	} else {
		setSuccessFor(password);
	}
	
    //confirm password
	if(confirm_passwordValue === '') {
		setErrorFor(confirm_password, 'Veuillez confirmer le mot de passe');
	} else if(passwordValue !== confirm_passwordValue) {
		setErrorFor(confirm_password, 'Les mots de passe ne correspondent pas');
	} else{
		setSuccessFor(confirm_password);
	}
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