<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <link rel="stylesheet" type="text/css" href="input.css">
        <title>社員登録画面</title>
    </head>

    <body>
    <!-- <script src="{{ asset('/js/input.js') }}"></script> onSubmit="return checkForm()"　autofocus required title="" -->
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
           <p><label>社員ID<span>*</span><input type="text" id="employee_id" name='employee_id' Pattern="^YZ[0-9]{8}" placeholder="例）YZ12345678"  value="{{ old('employee_id') }}"></label></P>
           
            <div class="name">
              <p><label>社員名<span>*</span><input type="text" name='first_name' placeholder="姓" style="width: 120px;" maxlength="25" value="{{ old('first_name') }}">
              <input type="text" name='last_name' placeholder="名" style="width: 120px;" value="{{ old('last_name') }}"></label></p>
             </div>
             <div>
                <p>所属セクション<span>*</span>
                <select name = 'department_list' required title="">
                <option value="">5つの選択肢を表示</option>
                <option>シス開</option>
                <option>グロカル</option>
                <option>ビジソル</option>
                </select>
            </p>
           <p><label>メールアドレス<span>*</span><input type="email" name='mail' placeholder="例）taro_yaz@yaz.co.jp"></label></p>
           <p>性別<span>*</span>
           <input type="radio" name='gender' value="男">男
            <input type="radio" name='gender' value="女">女
            </P>
           <p class=notnull><span>*</span>必要項目</p>
           <input type="submit" value="登録する" id="submit">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           
           </form>

            <p><a href = "{{ route('menu') }}">メニュー画面に戻る</p>
        </div>
        <!-- <script src="{{ asset('/js/input.js') }}" defer></script> -->
    </body>
</html>