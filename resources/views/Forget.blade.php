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
        .login-box h4 {
            margin: 0 0 30px;
            padding: 0;
            color: #f28650e8;
            text-align: center;
        }

    </style>

</head>

<body>
    <div class="login-box">
        <h4>Forget Password</h4>
        @if (session()->has('MobileNo'))
            <div class="alert alert-danger">{{ Session::get('MobileNo') }} </div>
        @endif
        @if (session()->has('DOBNotMatched'))
            <div class="alert alert-danger">{{ Session::get('DOBNotMatched') }} </div>
        @endif
        @if (session()->has('EmailNotMatched'))
            <div class="alert alert-danger"> {{ Session::get('EmailNotMatched') }} </div>
        @endif
        <form action="{{ route('ChangePass') }}">
            <span class="text-danger">@error('Email')
                {{$message}}  
              @enderror</span>
            <div class="user-box m-1">
                <input type="email" name="Email" autocomplete="off">
                <label>Email</label>
            </div>
            <span class="text-danger">@error('MobileNo')
                {{$message}}  
              @enderror</span>
            <div class="user-box m-1">
                <input type="number" name="MobileNo" autocomplete="off">
                <label>Mobile No</label>
            </div>
            <span class="text-danger">@error('DOB')
                {{$message}}  
              @enderror</span>
            <div class="user-box">
                <label class="d-block" style="margin-top:2.5rem!important;font-size:0.85rem" autocomplete="off">Date Of
                    Birth</label>
                <input type="date" name="DOB">
            </div>
            <input type="submit" value="submit">
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
