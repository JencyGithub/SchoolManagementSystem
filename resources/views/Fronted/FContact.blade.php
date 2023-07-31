@extends('Fronted.Main.Master')

@section('FAdmin')
<style>
    .Contact a{
        color: #fd5f00 !important;
    }
</style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Address</h3>
                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://1234567920">+ 1235 2355 90</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:info@yoursite.com">passion@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="bg-light align-self-stretch box p-4 text-center">
                        <h3 class="mb-4">Website</h3>
                        <p><a href="#">passioneducation.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                    <form action="{{route('FContactSave')}}">
                        <span class="text-danger" style="font-size:0.8rem">@error('Name')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Name" placeholder="Your Name" autocomplete="off">
                        </div>
                        <span class="text-danger" style="font-size:0.8rem">@error('Email')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Email" placeholder="Your Email" autocomplete="off">
                        </div>
                        <span class="text-danger" style="font-size:0.8rem">@error('Subject')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <input type="text" class="form-control" name="Subject" placeholder="Subject" autocomplete="off">
                        </div>
                        <span class="text-danger" style="font-size:0.8rem">@error('Message')
                            {{$message}}  
                          @enderror</span>
                        <div class="form-group">
                            <textarea id="" cols="30" rows="7" name="Message" class="form-control" placeholder="Message" autocomplete="off"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>
@endsection