@extends('Admin.Master')

@section('admin')
<style>
.Student_Management{
    color:#f28650e8 !important
}
</style>
    <form action="{{ route('StudentTable') }}">
        <div class="container-fluid pt-4">
            <div class="row mt-5">
                <div class="col-sm-6">
                    <h2>Student Details</h2>
                </div>
            </div>
        </div>

        {{-- Table start here --}}

        <div class="container-fluid pb-5">
            <div class="table-responsive">
                <table class="table table-hover border bg-white">
                    <thead>
                        <tr>
                            <th>Sr NO.</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Religion</th>
                            <th>Mobile Number</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Year</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $key => $all)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $all->StudentID }}</td>
                                <td>{{ $all->MiddleName }}{{ $all->FirstName }}</td>
                                <td>{{ $all->Address }}</td>
                                <td>{{ $all->Religion }}</td>
                                <td>{{ $all->MobileNo }}</td>
                                <td>{{ $all->Gender }}</td>
                                <td>{{ $all->Class }}</td>
                                <td>{{ $all->Year }}</td>
                                <td><a type="submit" href="{{ route('UpdateStudent', $all->id) }}" class="btn btn-primary">
                                        Edit</a>
                                    <a type="button" href="{{ route('DeleteData', $all->id) }}"
                                        class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
@endsection
