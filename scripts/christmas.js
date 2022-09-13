const christmasBtn = document.getElementById('christmasBtn');
const christmasInput = document.getElementById('christmasInput');
const christmasResult = document.getElementById('christmasResult');

function checkchristmas(date) {
    if (date == '') throw new Error('Cannot pass empty string.');
    fetch(`../apis/christmas-timer.php/?date=${date}`)
        .then(response => response.json())
        .then(data => christmasResult.textContent = data.description)
}

christmasBtn.addEventListener('click', () => {
    let date = christmasInput.value;
    try {
        checkchristmas(date);
    } catch (err) {
        christmasResult.textContent = err.message;
    }
})