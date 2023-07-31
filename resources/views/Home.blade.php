@extends('Admin.Master')

@section('admin')
    <style>
        body {
            background-image: url('img/b1.jpg');
            background-size: 100%;
            /* background-repeat: no-repeat; */
        }

        .Heading {
            height: 100vh;
            background-color: #f1463d33;
        }

        .Home {
            color: #f28650e8 !important;
        }

        @media only screen and (max-width: 5000px) {
            body {
                background: url('img/b1.jpg');
                background-size: 100%;
            }
        }

        /* @media only screen and (max-width: 2141px) {
            body {
                background: url('img/b2.jpg');
                background-size: 100%;
            }
        } */

        /* @media only screen and (max-width: 1309px) {
            body {
                background: #a9a9a999;
                background-size: 100%;
            }
        } */
    </style>
    <div class="Heading d-flex justify-content-center align-items-center font-weight-bold text-white text-center">
        <div>
            <h1 class="mb-3">Passion Education</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, praesentium provident! Velit
                facilis odi.</p>
            <p>Alias, praesentium provident.</p>
        </div>
    </div>
@endsection
