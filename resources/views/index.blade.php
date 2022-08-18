<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>top</title>
    </head>

    <body>
        <div class =top>
            <h1>社員名簿Web管理システム(簡易版)</h1>
        </div>
        <div class = menu>
            <ul>
                <li style = "list-style: none">管理メニュー</li> </style>
                <li><a href ="{{ route('input-employee') }}">社員登録画面</li>
                <li><a href ="{{ route('list-employee') }}">社員一覧画面</li>
            </ul>
        </div>
    </body>
</html>