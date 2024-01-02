<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | CatCation</title>
    <link rel="icon" type="image/x-icon" href="{{asset('image/favicon.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        div{
            font-family: 'Poppins', sans-serif;
        }
        .form-check-input[type='checkbox']:checked {
            background-color: #FF5800;
            border-color: #FF5800;
        }
    </style>
</head>
<body>
    <div class="container-fluid w-100">
        <div class="row h-100">
            <form method="POST" action="{{route('register')}}" class="col-8 h-100 needs-validation m-auto w-50" novalidate>
                @csrf
                <div class="row justify-content-center">
                    <div class="card rounded-0 border-0 w-50">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <div class="h4 fw-bold">Sign Up</div>
                            </div>
                            <div class="card-text">
                                <div class="lead text-secondary">Let's get started!</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                    <div class="valid-feedback">
                        Okay
                    </div>
                </div><br>
                <div class="row">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                    <div class="valid-feedback">
                        Okay
                    </div>
                </div><br>
                <div class="row">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">
                        Please choose a E-mail!
                    </div>
                </div><br>
                <div class="row">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <div class="invalid-feedback">
                        Please insert your password!
                    </div>
                </div><br>
                <div class="row">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" required>
                    <div class="invalid-feedback">
                        Please insert your password confirmation!
                    </div>
                </div><br>
                <div class="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <button class="btn fw-bold text-light" style="background-color: #FF5800;" type="submit">Sign Up</button>
                </div><br><br>
                <div class="row">
                    <div class="col"><hr></div>
                    <div class="col-1 text-center text-secondary">Or</div>
                    <div class="col"><hr></div>
                </div><br>
                <div class="row">
                    <button class="btn btn-light border-secondary border-2 fw-bold text-secondary" type="submit"><img src="{{  asset('image/LogoGoogle.png')  }}" alt="LogoGoogle"> Sign Up with Google</button>
                </div><br>
                <div class="row text-center">
                    <p class="text-secondary">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                </div>
            </form>
            <div class="col-4" style="background-color: #FFCB7C;">
                <img class="w-100" src="{{ asset('image/SignUpCat.png') }}" alt="SignUpCat">
            </div>
        </div>
    </div>
</body>
</html>