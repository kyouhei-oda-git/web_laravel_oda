<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
        <title>登録結果画面</title>
    </head>

    <body>
        <div>
            <p><?php echo $messag; ?></p>
            @foreach($input as $key => $value)
            <p>{{$key}}->{{$value}}</p>
            @endforeach
            <ul>
                <li><a href ="{{ route('input-employee') }}">社員登録画面</li>
                <li><a href ="{{ route('list-employee') }}">社員一覧画面</li>
                <li><a href = "{{ route('menu') }}">メニュー画面に戻る</li>
            </ul>
        </div>
    </body>
</html>