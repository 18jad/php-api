const passwordBtn = document.getElementById('passwordBtn');
const passwordInput = document.getElementById('passwordInput');
const passwordResult = document.getElementById('passwordResult');

function checkPassword(password) {
    if (password == '') throw new Error('Password cannot be empty.');
    fetch(`../apis/password.php`, {
        method: 'POST',
        body: new URLSearchParams({"password": password}),
    }).then(response => response.json())
    .then(data => passwordResult.textContent = data.overall_strengthness)
}

passwordBtn.addEventListener('click', () => {
    let password = passwordInput.value;
    try {
        checkPassword(password);
    } catch (err) {
        passwordResult.textContent = err.message;
    }
})