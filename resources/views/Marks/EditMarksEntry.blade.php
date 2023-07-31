@extends('Admin.Master')

@section('admin')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 border border-secondary p-4 my-5">
                <form action="{{ route('MarksEntry.UpdateSave', $data->id) }}">
                    <h4 class="text-center p-3">Marks Entry</h4>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Select ID :</label>
                        <select name="StudentID" id="StudentID" class="form-control">
                            <option disabled></option>
                            @foreach ($Student as $StudentID)
                                <option {{ $data->StudentID == $StudentID->StudentID ? 'selected' : '' }}>
                                    {{ $StudentID->StudentID }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Class :</label>
                        <select name="StudentClass" id="StudentClass" class="form-control">
                            <option disabled></option>
                            @foreach ($Class as $cls)
                                <option {{ $data->StudentClass == $cls->Class ? 'selected' : '' }}>{{ $cls->Class }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Year :</label>
                        <select name="StudentYear" id="StudentYear" class="form-control">
                            <option disabled></option>
                            @foreach ($Year as $yer)
                                <option {{ $data->Year == $yer->Year ? 'selected' : '' }}> {{ $yer->Year }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Subject :</label>
                        <select name="StudentSubject" id="StudentSubject" class="form-control">
                            <option disabled></option>
                            @foreach ($Subject as $Sub)
                                <option {{ $data->StudentSubject == $Sub->Subject ? 'selected' : '' }}>{{ $Sub->Subject }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Grade :</label>
                        <select name="StudentGrade" id="StudentGrade" class="form-control">
                            <option disabled></option>
                            @foreach ($Grade as $SGrade)
                                <option {{ $data->StudentGrade == $SGrade->Grade ? 'selected' : '' }}>{{ $SGrade->Grade }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Total Marks :</label>
                        <input type="text" value="{{ $data->TotalMarks }}" name="TotalMarks" class="form-control"
                            id="recipient-name">
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Obtain Marks :</label>
                        <input type="text" value="{{ $data->ObtainMarks }}" name="ObtainMarks" class="form-control"
                            id="recipient-name">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-secondary my-4 w-25">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
