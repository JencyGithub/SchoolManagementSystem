@extends('Admin.Master')

@section('admin')
    <style>
        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"] {
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
            background: #fd5f00;
            color: white;
            border: none;
        }

        input[type="submit"]:hover {
            background: #fd5f00;
            color: #ffffff;
            border: none;
        }
    </style>
    <form action="{{ route('Profile.UpdateSave', $all->id) }}">

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

                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                    </div>
                                </div>

                                <div class="col-md-8">

                                    <div class="row my-3 mx-2">
                                            <div class="col-md-12">
                                                <input type="text" value="{{ $all->FName }}" class="form-control"
                                                    name="FirstName" autocomplete="off">
                                                <label for="#">First Name</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" value="{{ $all->LName }}" class="form-control"
                                                    name="LastName" autocomplete="off">
                                                <label for="#">Last Name</label>
                                            </div>
                                            <div class="col-md-12 pt-3">
                                                <input type="text" value="{{ $all->Gender }}" class="form-control"
                                                    name="Gender" autocomplete="off">
                                                <label for="#">Gender</label>
                                            </div>
                                            <div class="col-md-12 pt-3">
                                                <input type="text" value="{{ $all->Stream }}" class="form-control"
                                                    name="Stream" autocomplete="off">
                                                <label for="#">Stream</label>
                                            </div>
                                            <div class="col-md-12 pt-3">
                                                <input type="date" value="{{ $all->DOB }}" class="form-control"
                                                    name="DOB" autocomplete="off">
                                                <label for="#">DOB</label>
                                            </div>
                                            <div class="col-md-12 pt-3">
                                                <input type="number" value="{{ $all->MobileNo }}" class="form-control"
                                                    name="MobileNo" autocomplete="off">
                                                <label for="#">Phone no</label>
                                            </div>
                                            <div class="col-md-12 pt-3">
                                                <input type="Email" value="{{ $all->Email }}" class="form-control"
                                                    name="Email" autocomplete="off">
                                                <label for="#">Email</label>
                                            </div>
                                            <input type="submit" value="Submit">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
