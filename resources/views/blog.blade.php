<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | CatCation</title>
    <link rel="icon" type="image/x-icon" href="{{asset('image/favicon.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        div{
            font-family: 'Poppins', sans-serif;
        }
        .pagination > li > a
        {
            background-color: white;
            color: #FF5800;
        }

        .pagination > li > a:focus,
        .pagination > li > a:hover,
        .pagination > li > span:focus,
        .pagination > li > span:hover
        {
            color: white;
            background-color: #FF5800;
            border-color: #ddd;
        }
        .pagination > .active > a
        {
            color: white;
            background-color: #FF5800 !Important;
            border: solid 1px #FF5800 !Important;
        }

        .pagination > .active > a:hover
        {
            background-color: #FF5800 !Important;
            border: solid 1px #FF5800;
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
        

        <!-- --ini featured content-- -->
        <div class="row bg-warning-subtle">
            <div class="col">
                <div class="card p-3 mx-5 border-0 rounded-5 ps-5 shadow" style="background-color: #FF5800;">
                    <div class="row">
                        <div class="col">
                            <div class="h4 text-light fw-bold mt-4">Neque Porro quisquam est</div>
                            <p class="lead text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                            <button type="button" class="btn btn-outline-warning text-bg-light shadow-sm" style="border-color: #FF5800;">
                                <div  class="fw-bold" style="color: #FF5800;">Read More</div>
                            </button>
                        </div>
                        <div class="col-1"></div>
                        <div class="col-7">
                            <img src="{{asset('image/FeaturedBlog.png')}}" alt="FeaturedBlog" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <br><br>
        </div>

        <!-- --ini content 1-- -->
        <div class="row bg-warning-subtle">
            <div class="col">
                <div class="ms-5 card border-0 rounded-4 shadow m-auto" style="width: 80%;">
                    <img src="{{asset('image/ContentImage.png')}}" alt="ContentImage" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FF5800;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet
                        </p>
                        <button type="button" class="btn btn-warning text-light shadow-sm" style="background-color: #FF5800;">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 rounded-4 shadow m-auto" style="width: 80%;">
                    <img src="{{asset('image/ContentImage.png')}}" alt="ContentImage" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FF5800;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet
                        </p>
                        <button type="button" class="btn btn-warning text-light shadow-sm" style="background-color: #FF5800;">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="me-5 card border-0 rounded-4 shadow m-auto" style="width: 80%;">
                <img src="{{asset('image/ContentImage.png')}}" alt="ContentImage" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FF5800;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet
                        </p>
                        <button type="button" class="btn btn-warning text-light shadow-sm" style="background-color: #FF5800;">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <br><br>
        </div>

        <!-- --ini content 2-- -->
        <div class="row bg-warning-subtle">
            <div class="col">
                <div class="ms-5 card border-0 rounded-4 shadow m-auto" style="width: 80%;">
                    <img src="{{asset('image/ContentImage.png')}}" alt="ContentImage" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FF5800;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet
                        </p>
                        <button type="button" class="btn btn-warning text-light shadow-sm" style="background-color: #FF5800;">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 rounded-4 shadow m-auto" style="width: 80%;">
                    <img src="{{asset('image/ContentImage.png')}}" alt="ContentImage" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FF5800;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet
                        </p>
                        <button type="button" class="btn btn-warning text-light shadow-sm" style="background-color: #FF5800;">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="me-5 card border-0 rounded-4 shadow m-auto" style="width: 80%;">
                <img src="{{asset('image/ContentImage.png')}}" alt="ContentImage" class="card-img-top"></img>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #FF5800;">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet
                        </p>
                        <button type="button" class="btn btn-warning text-light shadow-sm" style="background-color: #FF5800;">Read More</button>
                    </div>
                </div><br><br>
            </div>
        </div>

        <!-- --ini pagination-- -->
        <div class="row bg-warning-subtle">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav><br>
            </div>
        </div>

        <!-- --ini footer-- -->
        <div class="row" style="background-color: #FF7A34;">
            <div class="col-4">
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
            <div class="col-4">
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
            <div class="col-4">
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
