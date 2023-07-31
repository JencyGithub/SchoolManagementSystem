<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Change Password</title>

    <link rel="stylesheet" href="css\login.css">
    <link rel="stylesheet" href="bootstrap\bootstrap.min.css">

    <style>
        .login-box h4 {
            margin: 0 0 30px;
            padding: 0;
            color: #f28650e8;
            text-align: center;
        }

        .login-box form input[type="submit"] {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            background: #f28650e8;
            color: #ffffff;
        }
    </style>

</head>

<body>

    <div class="login-box">
        <h4>Change Password</h4>
        <form action="{{ route('SavePassword') }}">
            @if (Session()->has('password'))
                <div class="alert alert-danger">{{ Session()->get('password') }}</div>
            @endif
            <span class="text-danger">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
            <div class="user-box m-1">
                <input type="password" name="password">
                <label>Password</label>
            </div>
            <span class="text-danger">
                @error('Rpassword')
                    {{ $message }}
                @enderror
            </span>
            <div class="user-box m-1">
                <input type="password" name="Rpassword">
                <label>Re-Enter Password</label>
            </div>
            <div style="color: #f28650e8">
                <input type="checkbox" id="check">
                <label style="font-size: 0.8rem" class="ml-1" for="check">Agree With Change Password!!</label>
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
