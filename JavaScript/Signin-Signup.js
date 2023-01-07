const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));

//     $('signUp').signUpButton.addEventListener('click', () =>
//     $('container').container.classList.add('right-panel-active'));

// $('signIn').signInButton.addEventListener('click', () =>
//     $('container').classList.remove('right-panel-active')
// );