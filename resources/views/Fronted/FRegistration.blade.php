@extends('Fronted.Main.Master')

@section('FAdmin')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Registration</h1>
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>
                    <span>Registration <i class="ion-ios-arrow-forward"></i>
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
                <form action="{{route('StudentDataSave')}}">
                    @if(Session()->has('StudentID'))
                    <div class="alert alert-danger">{{Session()->get('StudentID')}}</div>
                    @endif
                    <span class="text-danger">@error('Student_ID')
                        {{$message}}  
                      @enderror</span>
                    <div class="form-group">
                        <input type="text" name="Student_ID" class="form-control" placeholder="StudenID" autocomplete="off">
                    </div>
                    <span class="text-danger">@error('Username')
                        {{$message}}  
                      @enderror</span>
                    <div class="form-group">
                        <input type="text" name="Username" class="form-control" placeholder="Full Name" autocomplete="off">
                    </div>
                    <span class="text-danger">@error('Email')
                        {{$message}}  
                      @enderror</span>
                    <div class="form-group">
                        <input type="text" name="Email" class="form-control" placeholder="Email" autocomplete="off">
                    </div>
                    <span class="text-danger">@error('MobileNo')
                        {{$message}}  
                      @enderror</span>
                    <div class="form-group">
                        <input type="number" name="MobileNo" class="form-control" placeholder="Mobile-No" autocomplete="off">
                    </div>
                    <span class="text-danger">@error('Password')
                        {{$message}}  
                      @enderror</span>
                    <div class="form-group">
                        <input type="password" name="Password" class="form-control" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Register" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection