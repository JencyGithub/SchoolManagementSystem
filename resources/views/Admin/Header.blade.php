<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black">
    <a class="navbar-brand " style="color: white;text-shadow: 3px 3px 3px rgba(195, 150, 150, 1)"
        href="index.html"><strong>Passion </strong><span><strong>Education</strong></span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav mr-auto">
            <li class="nav-item active ">
                <a class="nav-link ml-3 Home" href="{{ route('Home') }}" href="#">Home <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle Setup_Management" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Setup Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item " href="{{ route('Class') }}" href="#">Class</a>
                    <a class="dropdown-item " href="{{ route('Year') }}" href="#">Year</a>
                    <a class="dropdown-item " href="{{ route('Subject') }}" href="#">Subject</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle Student_Management" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Student Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item " href="{{ route('Studentreg') }}" href="#">Registration</a>
                    <a class="dropdown-item " href="{{ route('StudentTable') }}" href="#">Student Details</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle Marks_Management" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Marks Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item " href="{{ route('MarksEntry') }}" href="#">Marks Entry</a>
                    <a class="dropdown-item" href="{{ route('MarksGrade') }}" href="#">Marks grade</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle Report_Management" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Report Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item " href="{{ route('Result') }}" href="#">Result</a>
                </div>
            </li> 
        </div>
        <div class="form-inline my-lg-0">
            <div class="mx-auto d-inline-block">
                <a href="{{ route('Profile') }}"><i class="fa-solid fa-user text-white mr-2"
                        style="font-size: 1.4rem;"></i></a>
            </div>
        </div>
    </div>
</nav>