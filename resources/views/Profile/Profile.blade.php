@extends('Admin.Master')

@section('admin')
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        {{-- <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius"
                                            alt="User-Profile-Image"> --}}
                                            <i class="fa-solid fa-user-graduate" style="font-size: 4rem"></i>
                                    </div>
                                    <h6 class="f-w-600">Hembo Tingor</h6>
                                    <div class="mt-3">
                                        <a href="{{route('LogOut')}}" class="text-white"><i class="fa-solid fa-right-to-bracket " style="font-size: 1.3rem"></i></a>
                                        <a href="{{route('ChangePassword')}}" class="text-white"><i class="fa-solid fa-key mx-3" style="font-size: 1.3rem"></i></a>
                                        <a href="{{route('ProfileUpdate',$alldata->id)}}" class="text-white"><i class="fa-solid fa-pen-to-square" style="font-size: 1.3rem"></i></a>
                                    </div>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-md-8">

                                <div class="card-body">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                    <div class="row mb-3 b-b-default f-w-600">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">User Name</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{$alldata->FName}} {{$alldata->LName}}
                                        </div>
                                    </div>

                                    <div class="row mb-3 b-b-default f-w-600">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Gender</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{$alldata->Gender}}
                                        </div>
                                    </div>
                                    <div class="row mb-3 b-b-default f-w-600">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Stream</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{$alldata->Stream}}
                                        </div>
                                    </div>
                                    <div class="row mb-3 b-b-default f-w-600">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">DOB</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{$alldata->DOB}}
                                        </div>
                                    </div>
                                    <div class="row mb-3 b-b-default f-w-600">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Phone no</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{$alldata->MobileNo}}
                                        </div>
                                    </div>
                                    <div class="row mb-3 b-b-default f-w-600">
                                        <div class="col-sm-5">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            {{$alldata->Email}}
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
@endsection
