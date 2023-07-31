@extends('Admin.Master')

@section('admin')
    <style>
        .Marks_Management {
            color:#f28650e8 !important
        }
    </style>
    <div class="container-fluid pt-4">
        <div class="row mt-5">
            <div class="col-sm-6">
                <h2>Marks Details</h2>
            </div>
            <div class="col-sm-6 text-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light bg-white py-auto mr-auto border-secondary" data-toggle="modal"
                    data-target="#exampleModal"><i class="fa-solid fa-user"></i>
                    Add Marks
                </button>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-3">
                <form action="{{ route('MarksEntry/Save') }}">
                    <h4 class="text-center p-3 d-inline ">Marks Entry</h4>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Select ID :</label>
                        <select name="StudentID" id="StudentID" class="form-control">
                            <option selected disabled></option>
                            @foreach ($Student as $StudentID)
                                <option>{{ $StudentID->StudentID }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Class :</label>
                        <select name="StudentClass" id="StudentClass" class="form-control">
                            <option selected disabled></option>
                            @foreach ($Class as $cls)
                                <option>{{ $cls->Class }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Year :</label>
                        <select name="StudentYear" id="StudentYear" class="form-control">
                            <option selected disabled></option>
                            @foreach ($Year as $yer)
                                <option>{{ $yer->Year }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Subject :</label>
                        <select name="StudentSubject" id="StudentSubject" class="form-control">
                            <option selected disabled></option>
                            @foreach ($Subject as $Sub)
                                <option>{{ $Sub->Subject }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Student Grade :</label>
                        <select name="StudentGrade" id="StudentGrade" class="form-control">
                            <option selected disabled></option>
                            @foreach ($Grade as $SGrade)
                                <option>{{ $SGrade->Grade }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Total Marks :</label>
                        <input type="text" name="TotalMarks" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Obtain Marks :</label>
                        <input type="text" name="ObtainMarks" class="form-control" id="recipient-name">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-secondary my-4 w-25">
                </form>
            </div>
        </div>
    </div>
    {{-- MOdel --}}

    <div class="container-fluid pb-5">
        <div class="table-responsive">
            <table class="table table-hover border bg-white">
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Student Id</th>
                        <th>Student Class</th>
                        <th>Student Year</th>
                        <th>Student Subject</th>
                        <th>Grade</th>
                        <th>Total Marks</th>
                        <th>Obtain Marks</th>
                        <th style="width: 15%">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Data as $key => $data)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $data->StudentId }}</td>
                            <td>{{ $data->StudentClass }}</td>
                            <td>{{ $data->StudentYear }}</td>
                            <td>{{ $data->StudentSubject }}</td>
                            <td>{{ $data->StudentGrade }}</td>
                            <td>{{ $data->TotalMarks }}</td>
                            <td>{{ $data->ObtainMarks }}</td>
                            <td><a type="submit" href="{{ route('MarksEntry.Update', $data->id) }}"
                                    class="btn btn-primary"> Edit</a>
                                <a type="button" href="{{ route('MarksEntry.Delete', $data->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
