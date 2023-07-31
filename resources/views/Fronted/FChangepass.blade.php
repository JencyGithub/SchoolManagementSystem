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
            height: 2rem !important;
            /* color: #6a6a6a!important; */
            font-size: 0.9rem;
        }

        label {
            font-size: 0.9rem;
            margin-bottom: 0;
        }
    </style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread">Change Password</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span><span>Change Password <i
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

                            </div>
                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Change Password</h6>
                                    <hr class="mt-0">
                                    <form method="POST" action="{{route('CPassSave')}}">
                                        @csrf
                                        @if(Session()->has('Notfound'))
                                        <div class="alert alert-danger">{{Session()->get('Notfound')}}</div>
                                        @endif
                                        
                                        <label for="OldPass">Old Password :</label>
                                        <input type="password" class="form-control" name="OldPass" id="OldPass">
                                        <div class="text-danger " style="font-size: 0.7rem">@error('OldPass')
                                            {{$message}}  
                                          @enderror</div>
                                        <label for="NewPass">New Password :</label>
                                        <input type="password" class="form-control" name="NewPass" id="NewPass">
                                        <div class="text-danger " style="font-size: 0.7rem">@error('NewPass')
                                            {{$message}}  
                                          @enderror</div>
                                        <label for="RetypePass">Re-type Password :</label>
                                        <input type="password" class="form-control" name="RetypePass" id="RetypePass">
                                        <div class="text-danger " style="font-size: 0.7rem">@error('RetypePass')
                                            {{$message}}  
                                          @enderror</div>
                                        <input class="btn btn-primary float-right my-4" type="submit" value="save">
                                        <a style="font-size: 0.8rem" class="pb-5  text-secondary" href="{{route('FForgetPassopen')}}">Forget Password</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
