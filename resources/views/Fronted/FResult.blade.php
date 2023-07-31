@extends('Fronted.Main.Master')

@section('FAdmin')
<style>
    .Result a{
        color: #fd5f00 !important;
    }
</style>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Result</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Result <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="container my-5 border border-secondary">
                    <div class="row  p-2 my-4">
                        <div class="col-md-12">
                            <div class="row border-bottom border-secondary">
                                {{-- <div class="col-md-12">
                                    <a class="navbar-brand" href="#"><i
                                            class="fa-solid fa-graduation-cap text-dark"></i>&nbsp;<i
                                            class="fa-solid fa-i text-dark"></i><i class="fa-solid fa-v text-dark"></i><i
                                            class="fa-solid fa-m text-dark"></i></a>
                                            
                                </div> --}}
                                <div class="col-md-4 d-flex align-items-center py-1">
                                    <a class="navbar-brand" href="index.html">Passion <span>Education</span></a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 mt-2">
                                    <h5 class="d-inline-block font-weight-bold">Student ID :</h5>
                                    <p class="d-inline-block pl-2">{{ $SID->StudentID }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="d-inline-block pl-2 float-right">{{ $Result->StudentYear }}</p>
                                    <h5 class="d-inline-block font-weight-bold float-right">Year :</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 ">
                                    <h5 class="d-inline-block font-weight-bold">Name :</h5>
                                    <p class="d-inline-block pl-2">{{ $SID->FirstName }}
                                        {{ $SID->MiddleName }} {{ $SID->LastName }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="d-inline-block pl-2 float-right">{{ $Result->StudentClass }}</p>
                                    <h5 class="d-inline-block font-weight-bold float-right">Class :</h5>
                                </div>
                            </div>
                            <div class="row border-bottom border-secondary">
                                <div class="col-md-12 ">
                                    <h5 class="d-inline-block font-weight-bold">Date Of Birth :</h5>
                                    <p class="d-inline-block pl-2">{{ $SID->DOB }}</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead class="bg-dark text-white">
                                            <tr>
                                                <th scope="col" style="width: 10%;">No</th>
                                                <th scope="col" style="width: 45%;">Subject</th>
                                                <th sclope="col" style="width: 20%;">Total Marks</th>
                                                <th scope="col" style="width: 22%;">Obtain Marks</th>
                                                <th scope="col" style="width: 10%;">Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $Ttotal = null;
                                            $Ototal = null;
                                            ?>
                                            @foreach ($AResult as $key => $result)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $result->StudentSubject }}</td>
                                                    <td>{{ $result->TotalMarks }}</td>
                                                    @if ($result->ObtainMarks < 35)
                                                        <td class="text-danger font-weight-bold">
                                                            {{ $result->ObtainMarks }}</td>
                                                    @else
                                                        <td>{{ $result->ObtainMarks }}</td>
                                                    @endif
                                                    <td>{{ $result->StudentGrade }}</td>

                                                    <?php
                                                    $Ttotal = $Ttotal + $result->TotalMarks;
                                                    $Ototal = $Ototal + $result->ObtainMarks;
                                                    ?>

                                                </tr>
                                            @endforeach

                                            <tr class="">
                                                <td class="border-top border-white"></td>
                                                <th class="float-right">Total :</th>
                                                <td>
                                                    <?php
                                                    echo $Ttotal;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    echo $Ototal;
                                                    ?>
                                                </td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <table class="table text-center">
                                                <thead class="bg-dark text-white">
                                                    <th class="py-2">Percentage</th>
                                                    <th class="py-2">Percentile</th>
                                                    <th class="py-2">Grade</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            $per = ($Ototal / $Ttotal) * 100;
                                                            echo $per . '%';
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            echo $per . '%';
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            switch ($per) {
                                                                case $per > 90:
                                                                    echo 'A++';
                                                                    break;
                                                                case $per > 80:
                                                                    echo 'A';
                                                                    break;
                                                                case $per > 70:
                                                                    echo 'B+';
                                                                    break;
                                                                case $per > 60:
                                                                    echo 'B';
                                                                    break;
                                                                case $per > 50:
                                                                    echo 'C';
                                                                    break;
                                                                case $per < 35:
                                                                    echo 'Fail';
                                                                    break;
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center py-2" style="background-color: #d9d9d9;">
                            <h6>Generated by <a href="{{route('FHome')}}">Passion Education</a> <i class="fa fa-registered"
                                    style="font-size:.6rem"></i></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
