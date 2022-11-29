const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
const formsignin = document.getElementById('frmignin');
formsignin.addEventListener('submit',signinfun);

function signinfun(){
	window.location.href = '\resources\views\page.blade.php';
}

