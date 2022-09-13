const palindromeBtn = document.getElementById('palindromeBtn');
const palindromeInput = document.getElementById('palindromeInput');
const palindromeResult = document.getElementById('palindromeResult');

function checkPalindrome(word) {
    if (word == '') throw new Error('Cannot pass empty string.');
    fetch(`../apis/palindrome.php/?string=${word}`)
        .then(response => response.json())
        .then(data => palindromeResult.textContent = data.result)
}

palindromeBtn.addEventListener('click', () => {
    let word = palindromeInput.value;
    try {
        checkPalindrome(word);
    } catch (err) {
        palindromeResult.textContent = err.message;
    }
})