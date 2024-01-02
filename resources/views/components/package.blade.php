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
            <div class="col-3">
                <ul class="nav justify-content-start p-3"> 
                    <li class="nav-item">
                        <img src="{{asset('image/Logo.png')}}" alt="Logo" width=" 35px">
                        <img src="{{asset('image/FontLogo.png')}}" alt="FontLogo" width="110px">
                    </li>
                </ul>
            </div>

            <div class="col-6">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" style="color: #FF5800;" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="index.html#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="index.html#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#">FAQs</a>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="blog.html">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="col" id="nav-right">
                
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <br><br><br><br>
        </div> 
        <!-- Ini bagian package -->
        <script>
            function getPackage1(){
                localStorage.removeItem("packagename");
                localStorage.removeItem("packagedesc");
                var packageName = document.getElementById('package-name-basic').innerHTML;

                var packageDesc = document.getElementById("package-desc-basic").innerHTML;

                localStorage.setItem("packagename", packageName);

                localStorage.setItem("packagedesc", packageDesc)
            }
            function getPackage2(){
                localStorage.removeItem("packagename");
                localStorage.removeItem("packagedesc");
                var packageName = document.getElementById('package-name-premium').innerHTML; 

                var packageDesc = document.getElementById("package-desc-premium").innerHTML;

                localStorage.setItem("packagename", packageName);

                localStorage.setItem("packagedesc", packageDesc)
            }
            function getPackage3(){
                localStorage.removeItem("packagename");
                localStorage.removeItem("packagedesc");
                var packageName = document.getElementById('package-name-luxury').innerHTML;

                var packageDesc = document.getElementById("package-desc-luxury").innerHTML;

                localStorage.setItem("packagename", packageName);

                localStorage.setItem("packagedesc", packageDesc)
            }
            function logout(){
                localStorage.removeItem("user");
                localStorage.removeItem("status");
                window.replace('_self');
            }
            function isLogin(){
                var status = localStorage.getItem("status");
                if(status){
                    location.replace('checkout.html');
                }else{
                    location.replace('login.html');
                }
            }
            window.onload = function() {
                var status = localStorage.getItem("status");
                document.getElementById("nav-right").innerHTML = 'test';
                var packageName = localStorage.getItem("packagename").replaceAll('<br>','');

                document.getElementById("name-package").innerHTML = packageName + ' Package';

                document.getElementById("info-package").innerHTML = localStorage.getItem("packagedesc") + ' this is ' + localStorage.getItem("packagename").replaceAll('<br>','');

                
                if(status){
                    document.getElementById("nav-right").innerHTML = '<ul class="nav justify-content-end"><li class="nav-item"><img style="width: 40px; height: 40px;" class="rounded-circle" src="image/ProfilePic.jpg" alt="ProfilePic"></li><li class="nav-item"><a id="username-page" class="nav-link fw-bold" href="#" style="color: #FF5800;"></a></li><li class="nav-item dropdown"><button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button><ul class="dropdown-menu bg-white"><li><a style="color:#FF5800 "class="dropdown-item" onclick="logout()" href="package.html">Log out</a></li></ul></li></ul>';
    
                    document.getElementById("username-page").innerHTML = localStorage.getItem("user");
                }else{
                    document.getElementById("nav-right").innerHTML = '<ul class="nav justify-content-end"><li class="nav-item"><button type="button" class="btn btn-outline-warning mx-2 text-bg-light shadow-sm" style="border-color: #FF5800;"><a href="signup.html" style="color: #FF5800; text-decoration: none;">Sign Up</a></button></li><li class="nav-item"><button type="button" class="btn btn-warning shadow-sm" style="background-color: #FF5800;"><a class="text-light" href="login.html" style="text-decoration: none;">Log in</a></button></li></ul>';
                }

                if(packageName == "Basic"){
                    document.getElementById("package-price").innerHTML = '160.000';
                }else if(packageName == "Premium"){
                    document.getElementById("package-price").innerHTML = '250.000';
                }else if(packageName == "Luxury"){
                    document.getElementById("package-price").innerHTML = '400.000';
                }else{
                    document.getElementById("package-price").innerHTML = '0';
                }
            }
        </script>
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
                        <div class="col">
                            <img width="100%" src="{{asset('image/PackageCat1.png')}}" alt="PackageCat1">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <div id="name-package" class="h4 card-title fw-bold mt-4" style="color:#FF5800">Package Name</div>
                                <p id="info-package" class="card-text">Package Info</p>
                                <ul class="card-text">
                                    <li>Info pertama</li>
                                    <li>Info kedua</li>
                                    <li>Info ketiga</li>
                                </ul>
                                <div class="row">
                                    <div class="col-4">
                                        <button onclick="isLogin()" type="button" class="btn shadow-sm" style="background-color: #FF5800;">
                                            <a class="fw-bold text-white mx-2 text-decoration-none">Add to cart</a>
                                        </button>
                                    </div>
                                    <div class="col text-start">
                                        <p class="lead fw-bold" style="color: #FF5800;">Rp. <span id="package-price">0</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-warning-subtle text-center">
            <div class="h2 fw-bolder my-5" style="color: #FF5800;">Packages</div>
        </div>
        <div class="row bg-warning-subtle justify-content-center">
            <div class="col-3">
                <div class="card shadow text-center border-0 rounded-2 m-auto" style="background: #FF894B; width: 80%;">
                    <h5 id="package-name-basic" class="card-title fw-bold text-light"><br><br>Basic<br><br><br></h5>
                    <div class="card-body text-center bg-light rounded-top-5">
                        <p id="package-desc-basic" class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </p>
                        <a type="button" class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;" onclick="getPackage1()" href="package.html">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow text-center border-0 rounded-2 m-auto" style="background: #FF742B; width: 80%;">
                    <h5 id="package-name-premium" class="card-title fw-bold text-light"><br><br>Premium<br><br><br></h5>
                    <div class="card-body text-center bg-light rounded-top-5">
                        <p id="package-desc-premium" class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </p>
                        <a type="button" class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;" onclick="getPackage2()" href="package.html">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card shadow text-center border-0 rounded-2 m-auto" style="background: #FF5800; width: 80%;">
                    <h5 id="package-name-luxury" class="card-title fw-bold text-light"><br><br>Luxury<br><br><br></h5>
                    <div class="card-body text-center bg-light rounded-top-5">
                        <p id="package-desc-luxury" class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        </p>
                        <a type="button" class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;" onclick="getPackage3()" href="package.html">Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- --ini footer-- -->
        <div class="row bg-warning-subtle"><br><br><br></div>
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
                    <img class="ms-5" src="image/CatFooter1.png" alt="CatFooter1" width="200px">
                </div>
            </div>
        </div>
    </div>
</body>
</html>