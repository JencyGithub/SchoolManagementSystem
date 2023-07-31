<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login page</title>

    <link rel="stylesheet" href="css\login.css">
    <link rel="stylesheet" href="bootstrap\bootstrap.min.css">
    <style>
        .forget {
            color: white !important;
            letter-spacing: 0 !important;
            font-size: .75rem !important;
            margin-top: 0!important;
            display: block!important;
            padding: 0!important;
            float: right
        }

        .forget:hover {
            background: none !important;
            border-radius: none !important;
            box-shadow: none !important;
            /* color: #e9763dd7!important */
        }
    </style>

</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <form action="{{route('LoginId')}}">
            @if(Session()->has('Notfound'))
            <div class="alert alert-danger">{{Session::get('Notfound')}}</div>
            @endif
            @if(Session()->has('Password'))
            <div class="alert alert-danger">{{Session::get('Password')}}</div>
            @endif
            @if(Session()->has('Email'))
            <div class="alert alert-danger">{{Session::get('Email')}}</div>
            @endif
            <span class="text-danger">@error('Email')
                {{$message}}  
              @enderror</span>
            <div class="user-box m-1">
                <input type="email" name="Email" autocomplete="off">
                <label>Email</label>
            </div>
            <span class="text-danger">@error('Password')
                {{$message}}  
              @enderror</span>
            <div class="user-box m-1">
                <input type="password" name="Password" autocomplete="off">
                <label>Password</label>
            </div>
            <a href="{{route('ForgetPage')}}" class="forget" >Forget Password</a>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
