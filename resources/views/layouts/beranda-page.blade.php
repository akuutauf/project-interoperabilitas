<!DOCTYPE html>
<html lang="en">

<head>
    <!-- My CSS and Bootsrap 5 -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('landing-page/css/main.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('img/logo-poliwangi.png') }}" />
    <title>BUSINESS | Landing Page</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container my-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-trasparent my-nav">
            <div class="container-fluid">
                <img src="{{ asset('landing-page/img/logo-brand.svg') }}" class="p-2" width="60"
                    alt="" />
                <a class="navbar-brand" id="navbarBrand" href="#">
                    <h4>Interoperabilitas</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end my-div" id="navbarNavAltMarkup">
                    <div class="navbar-nav navigasi">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Services</a>
                        <a class="nav-link" href="#">Contact</a>
                        <div class="sign-up-botton">
                            <a href="/login" class="btn btn-info">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Content -->
    <div class="container my-content">
        <div class="row my-row justify-content-center">
            <div class="col-md-4 my-col">
                <div class="my-paragraph">
                    <h1>Business<br /><span>Analysis</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, accusamus autem fuga
                        voluptatibus ea voluptatem!</p>
                    <a href="/register" class="btn btn-info mt-3">REGISTER</a>
                </div>
            </div>
            <div class="col-md-7 text-center my-col-two justify-content-center">
                <img src="{{ asset('landing-page/img/ilustrator.svg') }}" width="600" alt="" />
            </div>
        </div>
    </div>

    <!-- My JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
