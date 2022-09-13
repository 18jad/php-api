const calculatorBtn = document.getElementById('calculatorBtn');
const calculatorResult = document.getElementById('calculatorResult');
const a = document.getElementById('a');
const b = document.getElementById('b');
const c = document.getElementById('c');

function calculate(a, b, c) {
    if (a == '' || c == '' || b == '') throw new Error('calculator cannot be empty.');
    fetch(`../apis/calculate-operation.php`, {
        method: 'POST',
        body: new URLSearchParams({
            "a": a,
            "b": b,
            "c": c
        }),
    }).then(response => response.json())
    .then(data => calculatorResult.textContent = `${data.operation} = ${data.calculated_operation}`)
}

calculatorBtn.addEventListener('click', () => {
    let aNum = parseFloat(a.value), bNum = parseFloat(b.value), cNum = parseFloat(c.value)
    try {
        calculate(aNum, bNum, cNum);
    } catch (err) {
        calculatorResult.textContent = err.message;
    }
})