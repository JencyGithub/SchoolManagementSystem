@extends('Fronted.Main.Master')

@section('FAdmin')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgb(248 229 218), rgb(253 95 0))
        }

        .form-control {
            height: 2.5rem !important;
            /* color: #6a6a6a!important; */
            font-size: 1rem;
        }
    </style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Profile</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span><span>Profile <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #f4f5f7;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                <h6>{{ $data->Username }}</h6>
                                <p style="color: #6a6a6a">{{ $data->StudentID }}</p>

                                <i class="far fa-edit mb-5 px-2" data-toggle="modal" data-target="#exampleModal"></i> <a href="{{route('Slogout')}}"><i
                                    class="fa-solid fa-right-from-bracket px-2 text-white"></i></a><a href="{{route('CPass')}}"><i class="fa-solid fa-key text-white px-2"></i></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0">
                                    <div class="row pt-1">
                                        <div class="col-12 ">
                                            <p style="font-size:0.9rem" class="m-0">Name</p>
                                            <p class="text-muted">{{ $data->Username }}</p>
                                        </div>
                                        <div class="col-12 ">
                                            <p style="font-size:0.9rem" class="m-0">Email</p>
                                            <p class="text-muted">{{ $data->Email }}</p>
                                        </div>
                                        <div class="col-12 ">
                                            <p style="font-size:0.9rem" class="m-0">Phone</p>
                                            <p class="text-muted">{{ $data->MobileNo }}</p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-start">
                                        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-lg mx-2"></i></a>
                                        <a href="https://twitter.com/?lang=en-in" target="_blank"><i class="fab fa-twitter fa-lg mx-2"></i></a>
                                        <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-lg mx-2"></i></a>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('FProfileSave')}}">
                                                    <div class="modal-body">
                                                        <label for="Name">Name :</label>
                                                        <input value="{{ $data->Username }}" type="text"
                                                            class="form-control mb-3" name="Name" id="Name">
                                                        <label for="number">Mobile No :</label>
                                                        <input value="{{ $data->MobileNo }}" type="number"
                                                            class="form-control" name="Mnumber" id="number">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
