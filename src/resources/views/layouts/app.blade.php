<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance-management</title>
    <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}" />
    @yield('css')
</head>

<body>

    <header class="header">
        <div class="header__inner">
            <p class="header__left">Atte</p>
            <nav class="header__right">
                <ul>
                    <li><a href="/">ホーム</a></li>
                    <li><a href="/attendance">日付一覧</a></li>
                    <li><a href="/login">ログアウト</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
