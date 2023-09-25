
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TEST</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
        <div class="wrapper">

        <header>
           <h1>ブログ</h1>
        </header>
    
        <nav>
           <ul>
              <li><a href="#">ホーム</a></li>
              <li><a href="#">記事一覧</a></li>
              <li><a href="#">お問い合わせ</a></li>
          </ul>
        </nav>

        <div class="container">
            <div class="post">
                <h2>【衝撃】一発逆転</h2>
                <p>だいだいこのような謳い文句のセミナー、講座は詐欺です。</p>
            </div>

            <div class="post">
                <h2>別のブログ記事のタイトル</h2>
                <p>ここに別のブログ記事の本文が表示されます。テキストが入ります。</p>
            </div>
        </div>

        

        </div>
        <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
