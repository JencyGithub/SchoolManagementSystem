<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'FName' => "Admin",
            'LName' => "Admin",
            'Gender' => "Female",
            'Stream' => "10th",
            'DOB' => "2022-08-10",
            'Email' => "Admin@gmail.com",
            'Password' =>Hash::make('admin123'),
            'MobileNo' => "1234567890"
        ]);
        DB::table('studentclasses')->insert([
            ['Class' => "1"],
            ['Class' => "2"],
            ['Class' => "3"],
            ['Class' => "4"],
            ['Class' => "5"],
            ['Class' => "6"],
            ['Class' => "7"],
            ['Class' => "8"],
            ['Class' => "9"],
            ['Class' => "10"]
        ]);
        DB::table('student_years')->insert([
            ['Year' => "2015"],
            ['Year' => "2016"],
            ['Year' => "2017"],
            ['Year' => "2018"],
            ['Year' => "2019"],
            ['Year' => "2020"],
            ['Year' => "2021"],
            ['Year' => "2022"]
        ]);
        DB::table('student_subjects')->insert([
            ['Subject' => "Maths"],
            ['Subject' => "Science"],
            ['Subject' => "Hindi"],
            ['Subject' => "English"],
            ['Subject' => "Social Science"],
            ['Subject' => "Computer"],
            ['Subject' => "Sanskrit"],
            ['Subject' => "P.T."],
            ['Subject' => "Gujarati"]
        ]);
        DB::table('marks_grades')->insert([
            [
                'Grade' => "A+",
                'StartMarks' => "90",
                'EndMarks' => "99",
                'Remarks' => "Excellent"
            ],
            [
                'Grade' => "A",
                'StartMarks' => "80",
                'EndMarks' => "89",
                'Remarks' => "Very good"
            ],
            [
                'Grade' => "B+",
                'StartMarks' => "70",
                'EndMarks' => "79",
                'Remarks' => "Good"
            ],
            [
                'Grade' => "B",
                'StartMarks' => "60",
                'EndMarks' => "69",
                'Remarks' => "Pass"
            ],
            [
                'Grade' => "C+",
                'StartMarks' => "50",
                'EndMarks' => "49",
                'Remarks' => "Average"
            ],
            [
                'Grade' => "C",
                'StartMarks' => "40",
                'EndMarks' => "39",
                'Remarks' => "Average"
            ],
            [
                'Grade' => "D",
                'StartMarks' => "35",
                'EndMarks' => "0",
                'Remarks' => "Average"
            ]
        ]);
        DB::table('marks_entries')->insert([
            [
                'StudentId' => "ST1010",
                'StudentClass' => "5",
                'StudentYear' => "2018",
                'StudentSubject' => "Maths",
                'StudentGrade' => "A+",
                'TotalMarks' => "100",
                'ObtainMarks' => "99"
            ],
            [
                'StudentId' => "ST1010",
                'StudentClass' => "5",
                'StudentYear' => "2018",
                'StudentSubject' => "Science",
                'StudentGrade' => "A",
                'TotalMarks' => "100",
                'ObtainMarks' => "85"
            ],
            [
                'StudentId' => "ST1010",
                'StudentClass' => "5",
                'StudentYear' => "2018",
                'StudentSubject' => "Hindi",
                'StudentGrade' => "B",
                'TotalMarks' => "100",
                'ObtainMarks' => "77"
            ],
            [
                'StudentId' => "ST1010",
                'StudentClass' => "5",
                'StudentYear' => "2018",
                'StudentSubject' => "Computer",
                'StudentGrade' => "A+",
                'TotalMarks' => "100",
                'ObtainMarks' => "98"
            ],
            [
                'StudentId' => "ST1010",
                'StudentClass' => "5",
                'StudentYear' => "2018",
                'StudentSubject' => "Gujarati",
                'StudentGrade' => "B+",
                'TotalMarks' => "100",
                'ObtainMarks' => "66"
            ],
            //-------------------------------------------
            [
                'StudentId' => "ST1011",
                'StudentClass' => "10",
                'StudentYear' => "2018",
                'StudentSubject' => "Maths",
                'StudentGrade' => "A+",
                'TotalMarks' => "100",
                'ObtainMarks' => "96"
            ],
            [
                'StudentId' => "ST1011",
                'StudentClass' => "10",
                'StudentYear' => "2018",
                'StudentSubject' => "Science",
                'StudentGrade' => "A",
                'TotalMarks' => "100",
                'ObtainMarks' => "83"
            ],
            [
                'StudentId' => "ST1011",
                'StudentClass' => "10",
                'StudentYear' => "2018",
                'StudentSubject' => "Hindi",
                'StudentGrade' => "B",
                'TotalMarks' => "100",
                'ObtainMarks' => "75"
            ],
            [
                'StudentId' => "ST1011",
                'StudentClass' => "10",
                'StudentYear' => "2018",
                'StudentSubject' => "Computer",
                'StudentGrade' => "A+",
                'TotalMarks' => "100",
                'ObtainMarks' => "95"
            ],
            [
                'StudentId' => "ST1011",
                'StudentClass' => "10",
                'StudentYear' => "2018",
                'StudentSubject' => "Gujarati",
                'StudentGrade' => "C",
                'TotalMarks' => "100",
                'ObtainMarks' => "69"
            ],
        ]);
        DB::table('student_regs')->insert([
            [
                'StudentID' => "ST1010",
                'FirstName' => "Patel",
                'MiddleName' => "Jency",
                'LastName' => "Jaysukhbhai",
                'Address' => "Radhe Rec",
                'Religion' => "Hindu",
                'MobileNo' => "1234567890",
                'Gender' => "Female",
                'DOB' => "2003-08-08",
                'Class' => "5",
                'Year' => "2018"
            ],
            [
                'StudentID' => "ST1011",
                'FirstName' => "Patel",
                'MiddleName' => "Dhruvi",
                'LastName' => "Jagdishbhai",
                'Address' => "Radhe Rec",
                'Religion' => "Hindu",
                'MobileNo' => "1234567890",
                'Gender' => "Female",
                'DOB' => "2003-09-08",
                'Class' => "10",
                'Year' => "2019"
            ],
        ]);
    }
}
