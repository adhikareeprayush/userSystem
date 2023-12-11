let login = document.getElementById('login');
let register = document.getElementById('register');


login.addEventListener('click', function() {
    let loginForm = document.getElementById('loginForm');
    let registerForm = document.getElementById('registerForm');
    login.classList.add('active');
    register.classList.remove('active');
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
});

register.addEventListener('click', function() {
    let loginForm = document.getElementById('loginForm');
    let registerForm = document.getElementById('registerForm');
    register.classList.add('active');
    login.classList.remove('active');
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
});


let loginBtn = document.getElementById('loginBtn');
let registerBtn = document.getElementById('registerBtn');

loginBtn.addEventListener('click', function() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    if (email == '' || password == '') {
        alert('Please fill all fields');
    } else {
        alert('Login successful');
    }
});

let closebtn = document.getElementById('closebtn');

closebtn.addEventListener('click', function() {
    let alertBox = document.getElementById('alert');
    alertBox.style.display = 'none';
});