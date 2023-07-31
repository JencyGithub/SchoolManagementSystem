<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>RESULT</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="container my-5 border border-secondary">
                    <div class="row  p-2 my-4">
                        <div class="col-md-12">
                            <div class="row border-bottom border-secondary">
                                <div class="col-md-12">
                                    {{-- <i class="fa-solid fa-graduation-cap px-3 pt-2 pb-4" style="font-size: 3rem;"></i> --}}
                                    <a class="navbar-brand" style="color:#f28650 " href="#"></i><h3><strong>Passion Education</strong></h3></a>
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
                                                <th scope="col" style="width: 50%;">Subject</th>
                                                <th sclope="col" style="width: 18%;">Total Marks</th>
                                                <th scope="col" style="width: 20%;">Obtain Marks</th>
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
                                                <thead class="bg-secondary text-white">
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
                            <h6>Generated by <a href="Home" style="color: #f28650">Passion Education</a> <i class="fa fa-registered"
                                    style="font-size:.6rem"></i></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/88bf84b9d4.js" crossorigin="anonymous"></script>

</body>

</html>
