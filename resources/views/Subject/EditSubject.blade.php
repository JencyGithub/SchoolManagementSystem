<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- icon --}}
    <link
        href="img\icon img.png "
        rel="icon">

    <title>Update Subject</title>
    <style>
        h1{
            font-size: 30px;
        }
        h3{
            font-size: 25px;
        }
    </style>
</head>

<body>
    <form action="{{ route('Subject.UpdateSave',$all->id) }}">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 border mt-5">
                            <h1 class="mt-5 text-center" style="color: #f28650e8">Enter Update Subject</h1>
                            <h3 class="mt-5 ">Enter Year :-</h3>
                            <input name="Subject" autocomplete="off" value="{{ $all->Subject }}"  class="form-control" type="text"><br>
                            <button type="submit" class="btn mt-3 mb-5 text-white" style="background-color: #f28650e8">Update</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

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