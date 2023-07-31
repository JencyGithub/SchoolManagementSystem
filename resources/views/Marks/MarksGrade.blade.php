@extends('Admin.Master')

@section('admin')
    <style>
        .Marks_Management {
            color:#f28650e8 !important
        }
    </style>
    <div class="container pt-4">
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

    <!-- Modal -->
    <form action="{{ route('MarksGrade/Save') }}">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content p-4">
                    <h4 class="text-center p-3">Enter Marks Grade Details</h4>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Enter Grade:</label>
                        <input type="text" name="Grade" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Start Marks:</label>
                        <input type="text" name="StartMarks" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">End Marks:</label>
                        <input type="text" name="EndMarks" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Remarks:</label>
                        <input type="text" name="Remarks" class="form-control" id="recipient-name">
                    </div>
                    <input type="submit" value="Save" class="btn btn-secondary my-4 w-25">

                </div>
            </div>
        </div>
    </form>
    {{-- Table start here --}}

    <div class="container pb-5">
        <div class="table-responsive">
            <table class="table table-hover border bg-white">
                <thead>
                    <tr>
                        <th>Sr no.</th>
                        <th>Grade</th>
                        <th>Start Marks</th>
                        <th>End Marks</th>
                        <th>Remarks</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alldata as $key => $all)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $all->Grade }}</td>
                            <td>{{ $all->StartMarks }}</td>
                            <td>{{ $all->EndMarks }}</td>
                            <td>{{ $all->Remarks }}</td>
                            <td><a type="submit" href="{{ route('MarksGrade.Update', $all->id) }}" class="btn btn-primary">
                                    Edit</a>
                                <a type="button" href="{{ route('MarksGrade.Delete', $all->id) }}"
                                    class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
