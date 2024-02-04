<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title') | Agaligoo</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">Agaligoo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">บทความ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/create">เขียนบทความ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{route('about')}}">เกี่ยวกับเรา</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="container py-2">
        @yield('content')
    </div>
</body>
</html>