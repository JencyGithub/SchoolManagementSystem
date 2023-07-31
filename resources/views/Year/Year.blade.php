@extends('Admin.Master')

@section('admin')
    <style>
        .Setup_Management {
            color: #f28650e8 !important
        }
    </style>

    <form action="{{ route('Year.Save') }}">
        <div class="container pt-4">
            <div class="row mt-5">
                <div class="col-sm-6">
                    <h2>Year Details</h2>
                </div>
                <div class="col-sm-6 text-right">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-light bg-white py-auto mr-auto border-secondary" data-toggle="modal"
                        data-target="#exampleModal"><i class="fa-solid fa-user"></i>
                        Add Another Year
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content p-4">
                    <h4 class="text-center p-3">Enter Your Year</h4>
                    <div class="form-outline">
                        <label for="class-name" class="col-form-label">Year:</label>
                        <input type="text" autocomplete="off" name="year" class="form-control" id="recipient-name">
                    </div>
                    <button type="button" class="btn btn-secondary my-4 w-25" data-dismiss="modal">Save</button>

                </div>
            </div>
        </div>

        {{-- Table start here --}}

        <div class="container pb-5">
            <div class="table-responsive">
                <table class="table table-hover border bg-white">
                    <thead>
                        <tr>
                            <th>Sr no.</th>
                            <th>Year</th>
                            <th class="w-25">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alldata as $key => $all)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $all->Year }}</td>
                                <td><a type="submit" class="btn btn-primary"
                                        href="{{ route('Year.Update', $all->id) }}">Edit</a>
                                    <a type="submit" class="btn btn-danger"
                                        href="{{ route('DeleteYear', $all->id) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </form>
@endsection
