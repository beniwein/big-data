<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/app.js') }}"></script>
    {{-- THIS IS FOR THE ICONS --}}
    <script src="https://kit.fontawesome.com/f30a166a26.js" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light nav_color text-white">
    <div class="container-fluid">
        <a class="navbar-brand nav_text text-white" href="/"><img src={{ asset('img/nav_logo.png') }}
                width="30" height="30" class="d-inline-block align-top" alt="">
            big data | let's talk</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-white">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield ('dashboard')
<body class="body_color">