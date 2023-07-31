@extends('Admin.Master')

@section('admin')
    <style>
        input[type="password"] {
            border: none !important;
            border-bottom: 1px solid gray !important;
            border-radius: 0 !important;
            padding: 0 1rem !important;
        }

        label {
            margin-bottom: 0 !important;
            font-weight: 500;
        }

        input[type="submit"] {
            position: relative;
            display: inline-block;
            padding: 5px 15px;
            border-radius: 3px;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 2rem;
            margin-left: 1.0rem;
            letter-spacing: 4px;
            background:#fd5f00;
            color: white;
            border: none;
        }

        input[type="submit"]:hover {
            background: #fd5f00;
            color: #ffffff;
            border: none;
        }
    </style>
    <div class="page-content page-container" id="page-content">

        <div class="padding">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <i class="fa-solid fa-user-graduate" style="font-size: 4rem"></i>
                                    </div>
                                    <h6 class="f-w-600">Hembo Tingor</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <form action="{{ route('ChangePassCheck') }}">
                                    @if (Session::has('NewPassword'))
                                        <div class="alert alert-danger p-1 px-3 ml-5 mt-2 mb-0 d-inline-block"
                                            style="font-size:1rem">
                                            {{ Session::get('NewPassword') }}</div>
                                    @endif
                                    @if (Session::has('Oldpassword'))
                                        <div class="alert alert-danger p-1 px-3 ml-5 mt-2 mb-0 d-inline-block"
                                            style="font-size:1em">
                                            {{ Session::get('Oldpassword') }}</div>
                                    @endif
                                    <div class="row my-3 mx-2">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control" name="OldPass">
                                            <label for="#">Old Password</label>
                                        </div>
                                        <span class="text-danger">@error('OldPass')
                                            {{$message}}
                                          @enderror</span>
                                        <div class="col-md-12 pt-3">
                                            <input type="password" class="form-control" name="NewPass">
                                            <label for="#">New Password</label>
                                        </div>
                                        <span class="text-danger">@error('NewPass')
                                            {{$message}}
                                          @enderror</span>
                                        <div class="col-md-12 pt-3">
                                            <input type="password" class="form-control" name="ConfirmPass">
                                            <label for="#">Confirm Password</label>
                                        </div>
                                        <span class="text-danger">@error('ConfirmPass')
                                            {{$message}}
                                          @enderror</span>
                                        <input type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
