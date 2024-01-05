<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | CatCation</title>
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
<body class="bg-warning-subtle">
    <div class="container-fluid">
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
    </div>
    <div class="container">
        <div class="h3 mt-4 fw-bold" style="color:#FF5800">Payment</div><br>
        <div class="row px-2 m-0 p-2 align-items-center rounded-2" style="background-color: #FF5800;">
            <div class="col-1">
                <img width="40px" src="{{asset('image/VoicherLogo.png')}}" alt="VoicherLogo">
            </div>
            <div class="col-6">
                <div class="fw-bold text-light">1 Voucher Available!</div>
            </div>
            <div class="col-5 text-end">
                <button type="button" class="btn rounded-5 fw-bold" style="background-color: white; color: #FF5800;">Apply Now</button>
            </div>
        </div><br>
        <script>
            function myFunction() {
                let text;
                if (confirm("Are you sure?") == true) {
                    window.location.href = "/";
                } else {
                    window.location.href = "/checkout/{{ $selectedPackage->id }}";
                }
            }
        </script>
        <form class="row" method="POST" onsubmit="confirm()" action="{{route('transaction')}}">
            @csrf
            <div class="col-md-6 col-12">
                <div class="card border-2 shadow p-3 h-100" style="border-color: #FF5800; color:#FF5800">
                    <div class="row">
                        <div class="col">
                            <label for="first_name" class="form-label">First Name *</label>
                            <input type="text" class="form-control rounded-1 border-dark-subtle" id="first_name" name= "first_name" required>
                        </div>
                        <div class="col">
                            <label for="last_name" class="form-label">Last Name *</label>
                            <input type="text" class="form-control rounded-1 border-dark-subtle" id="last_name" name="last_name"  required>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col">
                            <label for="address" class="form-label">Address *</label>
                            <input type="text" class="form-control rounded-1 border-dark-subtle" id="address" name="address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="phone_number" class="form-label">Phone Number *</label>
                            <input type="text" class="form-control rounded-1 border-dark-subtle" id="phone_number" name="phone_number" required>
                        </div>
                        <div class="col">
                            <label for="email" class="form-label">E-mail Address *</label>
                            <input type="text" class="form-control rounded-1 border-dark-subtle" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row my-4 mb-5">
                        <div class="col">
                            <label for="cat_name" class="form-label">Cat Name *</label>
                            <input type="text" class="form-control rounded-1 border-dark-subtle" id="cat_name" name="cat_name"  required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 mt-5 mt-md-0">
                <div class="card border-2 shadow p-3 h-100" style="border-color: #FF5800; color:#FF5800">
                    <div class="card-body">
                        
                        <div class="card-title text-black">
                            <p class="h5 fw-bold" style="color:#FF5800;">Choose Package</p>
                            <select class="form-select rounded-1 border-dark-subtle" aria-label="Default select example" id="package_choose" name="package_choose">
                                @if ($selectedPackage->id == 1)
                                    <option value="1" selected>Basic</option> 
                                    <option value="2">Premium</option>
                                    <option value="3">Luxury</option>
                                @elseif ($selectedPackage->id == 2)
                                    <option value="1">Basic</option>
                                    <option value="2" selected>Premium</option>
                                    <option value="3">Luxury</option>
                                @elseif ($selectedPackage->id == 3)
                                    <option value="1">Basic</option>
                                    <option value="2">Premium</option>
                                    <option value="3" selected>Luxury</option>
                                @endif
                            </select>
                            <p class="lead fw-bold" style="color: #FF5800;">Rp. <span id="package_price">{{ $selectedPackage->price }}</p><br>
                            <script>
                                var mySelect = document.getElementById('package_choose');
                                mySelect.onchange = (event) => {
                                    if(mySelect.value == 1){
                                        var inputText = {{ $packages[0]->price }};
                                    }else if(mySelect.value == 2){
                                        var inputText = {{ $packages[1]->price }};
                                    }else if(mySelect.value == 3){
                                        var inputText = {{ $packages[2]->price }};
                                    }
                                    document.getElementById('package_price').innerHTML = inputText;
                                }
                            </script>
                        </div><br><br>
                        <div class="row m-0">
                            <button type="submit" class="btn rounded-2 fw-bold text-light" style="background-color: #FF5800;">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- footer -->
        <div class="row mt-5 pt-5 text-center">
            <p style="color: #FF5800;" class="fw-bold">2023 - CatCation.</p>
        </div>
    </div>
</html>
