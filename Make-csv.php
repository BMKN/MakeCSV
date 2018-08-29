<?php session_start();
 header("Content-Type application/csv");
 header("Content-Disposition: attachment;Filename=Student Data.csv");
$file = fopen('php://output', 'w');
fputcsv($file, array(
    'Student Number',//These will output the different column names 
    'Course Name',
    'Student Name',
    'Student Payment Method',
    'Student Email',
    'Student Phone',
    'Student College',
    'Address',
    'PO#',
    'Registered on',
    'Department',
    'Book?',
    'Module 0',
    'Module 1',
    'Module 2',
    'Modul3 3',
    'Handling',
    'Date of Exam' ,
    'Date of Practical Exam',
    'Result Comments',
    'lecture handouts',
    'Student Comments'
));
foreach ($_SESSION['CSV-export'] as $row) {
    fputcsv($file, $row);
}
exit();
