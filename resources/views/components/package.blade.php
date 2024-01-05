<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Packages | CatCation</title>
    <link rel="icon" type="image/x-icon" href="{{asset('image/favicon.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        div{
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body style="background-color:#FF7A34;">
    <div class="container-fluid">
        <!-- --ini navigasi-- -->
        <div class="row bg-warning-subtle shadow-sm px-5 align-items-center fixed-top">
            <div class="col-md-3 col-6">
                <ul class="nav justify-content-start p-3"> 
                    <li class="nav-item">
                        <a href="/">
                            <img src="{{asset('image/Logo.png')}}" alt="Logo" width=" 35px">
                            <img class="d-none d-md-inline" src="{{asset('image/FontLogo.png')}}" alt="FontLogo" width="110px">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-6 d-none d-md-flex">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" style="color: #FF5800;" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#">FAQs</a>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
            <div id="nav-right" class="col-md-3 col-6">
                @auth
                <ul class="nav justify-content-end">
                    <li class="nav-item dropdown-center">
                        <button class="btn dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
                            <img style="width: 40px; height: 40px;" class="rounded-circle" src="{{ asset('image/ProfilePic.jpg') }}" alt="ProfilePic">
                            {{ $user }}
                        </button>
                        <ul class="dropdown-menu">
                            <li class="d-flex d-md-none">
                                <a type="button" class="dropdown-item fw-bold hover" href="/">Home</a>
                            </li>
                            <li class="d-flex d-md-none">
                                <a type="button" class="dropdown-item fw-bold hover" href="#about-us">About</a>
                            </li>
                            <li class="d-flex d-md-none">
                                <a type="button" class="dropdown-item fw-bold hover" href="#services">Services</a>
                            </li>
                            <li class="d-flex d-md-none">
                                <a type="button" class="dropdown-item fw-bold hover" href="#">FAQs</a>  
                            </li>
                            <li class="d-flex d-md-none">
                                <a type="button" class="dropdown-item fw-bold hover" href="#">Contact Us</a>
                            </li>
                            <li class="d-flex d-md-none">
                                <a type="button" class="dropdown-item fw-bold hover" href="/blog">Blog</a>
                            </li>
                            <li>
                                <a type="button" class="dropdown-item fw-bold hover" style="color: #FF5800;" href="{{ route('dashboard') }}">Start Order</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <button type="submit" class="dropdown-item fw-bold">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @else
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a type="button" class="btn btn-warning text-light fw-bold hover mx-2" style="background-color: #FF5800;" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;" href="{{ route('register') }}">Register</a>
                    </li>
                    </ul>
                @endauth
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <br><br><br><br>
        </div>
        <div class="row bg-warning-subtle">
            <div class="col text-center">
                <br>
                <div class="h4 fw-bold" style="color: #FF5800;">Package Details</div>
                <br>
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <div class="col">
                <div class="card rounded-4 border-0 shadow-lg mx-3">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <img width="100%" src="{{asset('image/PackageCat1.png')}}" alt="PackageCat1">
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card-body">
                                <div id="name-package" class="h4 card-title fw-bold mt-4" style="color:#FF5800">{{ $selectedPackage->name }}</div>
                                <p id="info-package" class="card-text">{{ $selectedPackage->description }}</p>
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn shadow-sm fw-bold text-white text-decoration-none" href="/checkout/{{ $selectedPackage->id }}" style="background-color: #FF5800;">Buy</a>
                                    </div>
                                    <div class="col text-md-start text-end">
                                        <p class="lead fw-bold" style="color: #FF5800;">Rp. {{ $selectedPackage->price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-warning-subtle text-center">
            <div class="col">
                <div class="h2 fw-bolder my-5" style="color: #FF5800;">Packages to Choose</div>
                <?php $count = $packages->count(); ?>
                @while($count > 0)
                <div class="row bg-warning-subtle justify-content-center">
                    @foreach($packages as $package)
                        <div class="col-12 col-md-3">
                            <div class="card shadow text-center border-0 rounded-2 mx-5 mx-md-2 mt-5 mt-md-0" style="background: #FF894B;">
                                <h5 id="package-name-basic" class="card-title fw-bold text-light"><br><br>{{ $package->name }}<br><br><br></h5>
                                <div class="card-body text-center bg-light rounded-top-5">
                                    <p id="package-desc-basic" class="card-text">
                                        {{  $package->description }}
                                    </p>
                                    <a class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;" href="/package/{{ $package->id }}">Details</a>
                                </div>
                            </div>
                        </div>
                        <?php $count--; ?>
                    @endforeach
                </div>
                @endwhile
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <div class="col">
                <div class="card border-0 bg-warning-subtle ms-5 mt-3" style="height: 235px;">
                    <img src="{{asset('image/CatFooter2.png')}}" alt="CatFooter2"  style="width: 140px;" class="img-fluid d-none d-md-block">
                    <img src="{{asset('image/Ball.png')}}" alt="Ball"  style="width: 70px;" class="img-fluid ms-auto d-none d-md-block">
                </div>
            </div>
            <div class="col-9"></div>
        </div>
        <!-- --ini footer-- -->
        <div class="row bg-warning-subtle"></div>
        <div class="row" style="background-color: #FF7A34;">
            <div class="col-md-4 col-12">
                <div class="card border-0 ms-5 mt-5 mb-2" style="background-color: #FF7A34;"><div class="h4 fw-bold text-light text-start">CatCation.</div></div>
                <div class="card border-0 ms-5 mb-2" style="background-color: #FF7A34;">
                    <div class="h5 fw-bold text-light text-start">Find us</div>
                    <div class="card-text text-start text-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    </div>
                    <br>
                    <p class="lead text-light fw-bold text-start" style="font-size: 15px;">
                        <img class="mx-1" src="{{asset('image/LogoIG.png')}}" alt="LogoIG" width="30px">
                        <img class="mx-1" src="{{asset('image/LogoFacebook.png')}}" alt="LogoFacebook" width="30px">
                        <img class="mx-1" src="{{asset('image/LogoYucub.png')}}" alt="LogoYucub" width="30px">
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card border-0 ms-5 mt-5 mb-2" style="background-color: #FF7A34;">
                    <div class="h5 fw-bold text-light text-start">Services</div>
                    <div class="card-text text-start">
                        <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Grooming</a></p>
                        <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Care</a></p>
                        <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Playtime</a></p>
                        <p><a href="#" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Hotel</a></p>
                    </div>
                    <div class="h5 fw-bold text-light text-start mt-3">Contact Us</div>
                    <p class="lead text-light fw-bold text-start" style="font-size: 15px;">
                        <img class="mx-1" src="{{asset('image/LogoWA.png')}}" alt="LogoWA" width="30px">
                        +6282-XXXX-XXXX
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card border-0 m-5 text-start" style="background-color: #FF7A34;">
                    <div class="h4 fw-bold text-light">About Us</div>
                    <p class="lead text-light" style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="card border-0 ms-5 justify-content-end align-content-end align-items-end" style="background-color: #FF7A34;">
                    <img class="ms-5" src="{{asset('image/CatFooter1.png')}}" alt="CatFooter1" width="200px">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
