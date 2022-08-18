
var form = document.forms[0],
    input = document.getElementById('employee_id'),
    first_name = document.getElementById("first_name"),
    submit = document.getElementById('submit');

console.log(input);
console.log(first_name);
console.log(submit);

input.addEventListener('invalid', function (e) {
    if (input.validity.valueMissing) {
        e.target.setCustomValidity("社員IDを入力してください。");
    } else if (!input.validity.valid) {
        e.target.setCustomValidity("This is not a valid username");
    }
    // to avoid the 'sticky' invlaid problem when resuming typing after getting a custom invalid message
    input.addEventListener('input', function (e) {
        e.target.setCustomValidity('');
    });
}, false);
