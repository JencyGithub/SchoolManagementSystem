@extends('Admin.Master')

@section('admin')
    <style>
        input,select{font-size: 1rem!important}
        .Student_Management{
            color: #f28650e8 !important
        }
    </style>
    <section class="h-100 gradient-custom">
        <div class="container-fluid py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form action="{{route('Studentreg.Save')}}">
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="FirstName" id="Sname"
                                                class="form-control form-control-lg" autocomplete="off" />
                                            <label class="form-label" for="firstName">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">

                                        <div class="form-outline">
                                            <input type="text" name="MiddleName" id="Fname"
                                                class="form-control form-control-lg" autocomplete="off"/>
                                            <label class="form-label" for="lastName">Middle Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="LastName" id="Lname"
                                                class="form-control form-control-lg" autocomplete="off"/>
                                            <label class="form-label" for="lastName">Last Name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 mb-4">
                                        <div class="form-outline">
                                            <input type="text" name="Address" id="Address"
                                                class="form-control form-control-lg" autocomplete="off"/>
                                            <label class="form-label" for="Address">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="Religion" class="select form-control-lg w-100">
                                            <option selected disabled>Religion</option>
                                            <option>Hindu</option>
                                            <option>Jain</option>
                                            <option>Christian</option>
                                        </select>
                                        <label class="form-label select-label">Religion</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <input type="text" name="MobileNumber" class="form-control form-control-lg"
                                                id="birthdayDate" autocomplete="off"/>
                                            <label for="birthdayDate" class="form-label">Mobile Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <h6 class="mb-2 pb-1">Gender: </h6>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="Gender" type="radio"
                                                name="inlineRadioOptions" id="femaleGender" value="Female" checked />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="Gender" type="radio"
                                                name="inlineRadioOptions" id="maleGender" value="Male" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="Gender" type="radio"
                                                name="inlineRadioOptions" id="otherGender" value="Other" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-4 d-flex align-items-center">
                                        <div class="form-outline datepicker w-100">
                                            <input type="date" name="DOB" class="form-control form-control-lg"
                                                id="DOB" />
                                            <label for="birthdayDate" class="form-label">Date Of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <select name="Class" class="select form-control-lg w-100">
                                            <option selected disabled>Class</option>
                                            @foreach($Class as $cls)
                                            <option>{{$cls->Class}}</option>
                                            @endforeach
                                        </select>
                                        <label class="form-label select-label">Class</label>
                                    </div>
                                    <div class="col-md-4 mb-4 pb-2">
                                        <select name="Year" class="select form-control-lg w-100">
                                            <option selected disabled>Year</option>
                                            @foreach($Year as $yer)
                                            <option> {{$yer->Year}} </option>
                                            @endforeach
                                        </select>
                                        <label class="form-label select-label">Year</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-sm-4">
                                        <div class="mt-4 pt-2 pb-2">
                                            <button type="cancel" name="Cancel" class="btn-dark w-100"
                                                style="border-radius: 4px">Cancel</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-4 pt-2 pb-2">
                                            <button type="reset" name="Reset" class="btn-dark w-100"
                                                style="border-radius: 4px">Reset</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mt-4 pt-2 pb-2">
                                            <button type="register" name="Register" class="btn-primary w-100"
                                                style="border-radius: 4px">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
