<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="input.css">
        <title>社員登録画面</title>

    </head>

    <body>
    <script src="{{ asset('/js/input.js') }}"></script>
        <form action="index" name="employee_text" method="post" onSubmit="return checkForm()">
        <div class = "input">
           <p><label>社員ID<span>*</span><input type="text" name="id" placeholder="例）YZ12345678"></label></P>
            <div class="name">
              <p><label>社員名<span>*</span><input type="text" name="first_name" placeholder="姓" style="width: 120px;" >
              <input type="text" name="last_name" placeholder="名" style="width: 120px;"></label></p>
             </div>
             <div>
                <p>所属セクション<span>*</span>
                <select name = "department" required>
                <option>シス開</option>
                <option>グロカル</option>
                <option>ビジソル</option>
                </select>
            </p>
           <p><label>メールアドレス<span>*</span><input type="email" name="mail" placeholder="例）taro_yaz@yaz.co.jp"></label></p>
           <p>性別<span>*</span>
           <input type="radio" name="s" value="男">男
            <input type="radio" name="s" value="女">女
            </P>
           <p class=notnull><span>*</span>必要項目</p>
           <input type="submit" value="登録する">
          
           </form>

            <p><a href = menu>メニュー画面に戻る</p>
        </div>
        
    </body>
</html>