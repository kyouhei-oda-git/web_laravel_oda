<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="input.css">
        <title>社員登録画面</title>
    </head>

    <body>
     <!-- onSubmit="return checkForm()"> -->
        @if ($errors->any())
        <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
        @endif
        <form action="{{ route('post_confirm_screen') }}" name="employee_text" method="POST" >
        <div class = "input">
           <p><label>社員ID<span>*</span><input type="text" id="employee_id" name='employee_id' Pattern="^YZ[0-9]{8}" placeholder="例）YZ12345678" minlength= "10" maxlength= "10" autofocus required title="" value="{{ old('employee_id') }}"></label></P>
           
            <div class="name">
              <p><label>社員名<span>*</span><input type="text" name='first_name' id="first_name" placeholder="姓" maxlength="25" style="width: 120px;" autofocus required title="" value="{{ old('first_name') }}">
              <input type="text" name='last_name' id="last_name" placeholder="名"  maxlength="25" style="width: 120px;" autofocus required title="" value="{{ old('last_name') }}"></label></p>
             </div>
             <div>
                <p>所属セクション<span>*</span>
                <select name = 'department_list' id="department_list" autofocus required title="">
                <option value="">選択してください</option>
                <option value="シス開">シス開</option>
                <option value="グロカル">グロカル</option>
                <option value="ビジソル">ビジソル</option>
                </select>
            </p>
           <p><label>メールアドレス<span>*</span><input type="email" name='mail' id="mail" maxlength= "256" Pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+([a-zA-Z0-9._-]+)+$" placeholder="例）taro_yaz@yaz.co.jp" autofocus required title=""></label></p>
           
           <label>性別<span>*</span></label>
           <label for="r_male">男<input type="radio" id ="r_male" name='gender' value="男" class="genders" required></label>
           <label for="r_female">女<input type="radio" id="r_female" name='gender' class="genders" value="女" ></label>

           <p class=notnull><span>*</span>必要項目</p>
           <input type="submit" value="登録する" id="submit">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
           </form>

            <p><a href = "{{ route('menu') }}">メニュー画面に戻る</p>
        </div>
        <script src="{{ asset('/js/input.js') }}" defer></script> 
    </body>
</html>