<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>タイトル一覧</h1>
    <ul>
        @foreach ($memos as $memo)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>
