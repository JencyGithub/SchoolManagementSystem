@extends('Fronted.Main.Master')

@section('FAdmin')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h2 class="mb-2 bread">Forget Password</h2>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>Forget Password<i class="ion-ios-arrow-forward"></i>
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
                    <form action="{{route('FForgetPassSave')}}">
                        @if (Session()->has('Password'))
                            <div class="alert alert-danger">{{ Session()->get('Password') }}</div>
                        @endif
                        @if (Session()->has('MobileNo'))
                            <div class="alert alert-danger">{{ Session()->get('MobileNo') }}</div>
                        @endif
                        @if (Session()->has('EmailNotMatched'))
                            <div class="alert alert-danger">{{ Session()->get('EmailNotMatched') }}</div>
                        @endif
                        @if (Session()->has('StudentIDNotMatched'))
                            <div class="alert alert-danger">{{ Session()->get('StudentIDNotMatched') }}</div>
                        @endif
                        <span class="text-danger">@error('StudentID')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="text" name="StudentID" class="form-control" placeholder="StudentID">
                        </div>
                        <span class="text-danger">@error('Email')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="Email" name="Email" class="form-control" placeholder="Email">
                        </div>
                        <span class="text-danger">@error('MobileNo')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="number" name="MobileNo" class="form-control" placeholder="Mobile-No">
                        </div>
                        <span class="text-danger">@error('Newpass')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="password" name="Newpass" class="form-control" placeholder="New Password">
                        </div>
                        <span class="text-danger">@error('confirmpass')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="password" name="confirmpass" class="form-control" placeholder="Confirm Password">
                        </div>
                        
                        <div class="form-group mt-4">
                            <input type="submit" value="Change" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
