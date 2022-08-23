
var form = document.forms[0],
    input = document.getElementById('employee_id'),
    first_name = document.getElementById("first_name"),
    last_name = document.getElementById("last_name"),
    submit = document.getElementById('submit');
department_list = document.getElementById('department_list');
mail = document.getElementById('mail');
//gender = document.getElementsByName('gender');
submit = document.getElementById('submit');
form = document.forms.employee_text;
r_female = document.getElementById('r_female');
r_male = document.getElementById('r_male');
radio = document.getElementById("radio");
genders = document.querySelectorAll(".genders");

console.log(radio);
console.log(genders);
//console.log(r_female);
//console.log(r_male);
//社員IDの入力チェック
input.addEventListener('invalid', function (e) {
    if (input.validity.valueMissing) {
        e.target.setCustomValidity("社員IDを入力してください");
    } else if (input.validity.tooShort) {
        e.target.setCustomValidity("社員IDは10文字で入力してください");
    } else if (input.validity.tooLong) {
        e.target.setCustomValidity("社員IDは10文字で入力してください");
    } else if (input.validity.patternMismatch) {
        e.target.setCustomValidity("社員IDを正しく入力してください");
    }

    // 入力時のチェック
    input.addEventListener('input', function (e) {
        e.target.setCustomValidity('');
        if (input.validity.tooShort) {
            e.target.setCustomValidity("社員IDは10文字で入力してください");
        } else if (input.validity.tooLong) {
            e.target.setCustomValidity("社員IDは10文字で入力してください");
        } else if (input.validity.patternMismatch) {
            e.target.setCustomValidity("社員IDを正しく入力してください");
        }

    });
}, false);

//社員名の入力チェック
first_name.addEventListener('invalid', function (e) {
    if (first_name.validity.valueMissing) {
        e.target.setCustomValidity("社員名を入力してください");
    } else if (first_name.validity.tooLong) {
        e.target.setCustomValidity("社員名は25文字以内で入力してください");
    }
    // 入力時のチェック
    first_name.addEventListener('input', function (e) {
        e.target.setCustomValidity('');
        if (first_name.validity.tooLong) {
            e.target.setCustomValidity("社員名は25文字以内で入力してください");
        }
    });
}, false);

last_name.addEventListener('invalid', function (e) {
    if (last_name.validity.valueMissing) {
        e.target.setCustomValidity("社員名を入力してください");
    } else if (last_name.validity.tooLong) {
        e.target.setCustomValidity("社員名は25文字以内で入力してください");
    }
    // 入力時のチェック
    last_name.addEventListener('input', function (e) {
        e.target.setCustomValidity('');
        if (last_name.validity.tooLong) {
            e.target.setCustomValidity("社員名は25文字以内で入力してください");
        }
    });
}, false);

//所属セクションの入力チェック
department_list.addEventListener('invalid', function (e) {
    if (department_list.validity.valueMissing) {
        e.target.setCustomValidity("所属セクションを入力してください");
    }
    department_list.addEventListener('input', function (e) {
        e.target.setCustomValidity('');
    });
}, false);

//メールアドレスのチェック
mail.addEventListener('invalid', function (e) {
    if (mail.validity.valueMissing) {
        e.target.setCustomValidity("メールアドレスを入力してください");
    } else if (mail.validity.tooLong) {
        e.target.setCustomValidity("メールアドレスは256文字以内で入力してください");
    } else if (mail.validity.patternMismatch) {
        e.target.setCustomValidity("メールアドレスを正しく入力してください");
    }
    //メールアドレスの入力時チェック
    mail.addEventListener('input', function (e) {
        e.target.setCustomValidity('');
        if (mail.validity.patternMismatch) {
            e.target.setCustomValidity("メールアドレスを正しく入力してください");
        }
    });
}, false);

/*for (var i = 0; i < gender.length; i++) {
    gender[i].addEventListener('invalid', function (e) {
        console.log(gender);
        if (!gender[i].cheaked) {
            console.log('hoge');
            e.target.setCustomValidity("性別を入力してください");
        }
    }, false);
}*/
genders.forEach(function (gender) {
    gender.addEventListener('invalid', function (e) {
        e.target.setCustomValidity('');
        console.log(genders[0]);
        if (r_female.validity.valueMissing && r_male.validity.valueMissing) {
            console.log('hoge');
            e.target.setCustomValidity("性別を入力してください");
        }
    });
}, false);
/*r_female.addEventListener('invalid', function (e) {
    console.log('hoge')
    if (r_female.validity.valueMissing) {
        console.log('hoge')
        e.target.setCustomValidity("性別を入力してください");
    }
    r_male.ddEventListener('invalid', function (e) {
        console.log('hoge')
        if (r_male.validity.valueMissing) {
            console.log('hoge')
            e.target.setCustomValidity("性別を入力してください");
        }
    })

}, false);
/*for (var i = 0; i < gender.lenngth; i++) {
    console.log('hoge')
    gender[i].addEventListener('invalid', function (e) {
        if (gender[i].validity.valueMissing) {
            console.log('hoge');
            e.target.setCustomValidity("性別を入力してください");
        }
    }, false);
}*/



/*radio.addEventListener('invalid', function (e) {
    if (gender.validity.valueMissing) {
        console.log('hoge');
        e.target.setCustomValidity("性別を入力してください");
    }

}, false);



/*-gender.forEach(e =>
    e.addEventListener('invalid', () => {
        if (gender.validity.valueMissing) {
            console.log('hoge');
            e.target.setCustomValidity("性別を入力してください");
        } else {
            false;
        }
    })
)
form.addEventListener('invalid', function (e) {
    for (i = 0; i < gender.length; i++) {
        
    }
}, false);*/



