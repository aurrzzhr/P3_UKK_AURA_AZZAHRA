<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>HOMEPAGE</title>
    {{-- icon --}}
    <link rel="icon" href="/img/aura/q.jpg">

    {{-- css --}}
    <link rel="stylesheet" href="/css/aura/w.css">
</head>
<body>
    <div class="hp">
        <div class="logo">
            <img src="/img/aura/q.jpg" id="satu">
        </div>
        <div class="icon">
            <div class="search-box">
                <div class="search-icon">
                    <button type="submit" class="btn btn-lg" id="search-btn"><i class="fa fa-search"></i></button>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" id="search_status" placeholder="Contoh : 199620056" />
                </div>
            </div>
            <div class="login-box">
                <div class="login-icon">
                    <a href="{{ route('login') }}"><img src="/img/aura/log-in.svg" id="tiga"></a>
                </div>
            </div>
        </div>
        <img src="/img/aura/laun.svg" id="empat">
        <h1>SELAMAT DATANG!</h1>
        <div class="container-modal">
            @include('frontend.modal')
        </div>
    </div>
</body>
</html>

