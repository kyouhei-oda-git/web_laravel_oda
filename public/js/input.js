function checkForm(){
    
    //未入力の入力チェック
    if(document.employee_text.id.value==""){
        alert("社員IDを入力して下さい。");
    return false;
    }else if(document.employee_text.first_name.value=="" || document.employee_text.last_name.value==""){
        alert("社員名を入力して下さい。");
    return false;
    }else if(document.employee_text.mail.value==""){
        alert("メールアドレスを入力して下さい。");
    return false;
    } var flag = false;
      for(var i=0; i<document.employee_text.s.length;i++){
            if(document.employee_text.s[i].checked){ 
            return flag = true;
        }
    } if(flag == false){
        alert("性別を入力してください。");
        return flag;
    }else{
    return true;
    }
}
