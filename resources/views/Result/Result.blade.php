@extends('Admin.Master')

@section('admin')
<style>
    .Report_Management{
        color:#f28650e8 !important
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 border border-secondary p-4 my-5">
                <form action="{{route('AResult')}}">
                    <h2 class="text-center p-3">RESULT</h2>
                    @if(Session()->has('Aresult'))
                    <div class="alert alert-danger">{{Session::get('Aresult')}}</div>
                    @endif
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Select ID :</label>
                        <select name="StudentID" id="StudentID" class="form-control">
                            <option disabled selected>Select your ID</option>
                            @foreach($id as $sid )
                                <option value="{{$sid->StudentID}}">{{$sid->StudentID}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Class :</label>
                        <select name="StudentClass" id="StudentClass" class="form-control">
                            <option disabled selected>Select Class</option>
                            @foreach($Class as $cls )
                                <option value="{{$cls->Class}}">{{$cls->Class}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Year :</label>
                        <select name="StudentYear" id="StudentYear" class="form-control">
                            <option disabled selected>Select Year</option>
                            @foreach($Year as $yer )
                                <option value="{{$yer->Year}}">{{$yer->Year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-secondary my-4 w-25">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
