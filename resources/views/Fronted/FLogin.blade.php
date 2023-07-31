@extends('Fronted.Main.Master')

@section('FAdmin')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Log In</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Login <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section p-5">
        <div class="container">
            <div class="row d-flex justify-content-center no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{route('SloginUser')}}">
                        @if(Session()->has('StudentEmail'))
                        <div class="alert alert-danger">{{Session()->get('StudentEmail')}}</div>
                        @endif
                        @if(Session()->has('StudentPassword'))
                        <div class="alert alert-danger">{{Session()->get('StudentPassword')}}</div>
                        @endif
                        @if(Session()->has('fail'))
                        <div class="alert alert-danger">{{Session()->get('fail')}}</div>
                        @endif
                        <span class="text-danger">@error('StudentID')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="text" name="StudentID" class="form-control" placeholder="StudentID" autocomplete="off">
                        </div>
                        <span class="text-danger">@error('password')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Your Password" autocomplete="off">
                        </div>
                        <a style="font-size: 0.8rem" class="pb-5" href="{{route('FRegistration')}}">Create New Account</a>
                        <a style="font-size: 0.8rem" class="pb-5 float-right text-secondary" href="{{route('FForgetPassopen')}}">Forget Password</a> 
                        <div class="form-group mt-4">
                            <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
