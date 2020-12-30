<?php

include_once("phpGrid/conf.php");
?>


<?php
$_GET['currentPage'] = 'employees';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT BranchId, EmployeeId, FirstName, MidInit, LastName, Gender, DOB, Telephone, Address, Salary FROM employee', 'EmployeeId', 'employee');
$dgOrd->set_sortname('EmployeeId', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('EmployeeId', 'Employee ID');
$dgOrd->set_col_title('BranchId', 'Branch ID');
$dgOrd->set_col_title('FirstName', 'First Name');
$dgOrd->set_col_title('MidInit', 'M');
$dgOrd->set_col_title('LastName', 'Last Name');
$dgOrd->set_col_title('Gender', 'Gender');
$dgOrd->set_col_title('DOB', 'Date of Birth');
$dgOrd->set_col_title('Telephone', 'Telephone');
$dgOrd->set_col_title('Address', 'Address');
$dgOrd->set_col_title('Salary', 'Salary');

$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(100);

$dgOrd->set_col_width('EmployeeId', '50px');
$dgOrd->set_col_width('BranchId', '35px');
$dgOrd->set_col_width('FirstName', '40px');
$dgOrd->set_col_width('MidInit', '20px');
$dgOrd->set_col_width('LastName', '40px');
$dgOrd->set_col_width('Gender', '35px');
$dgOrd->set_col_width('DOB', '55px');
$dgOrd->set_col_width('Telephone', '55px');
$dgOrd->set_col_width('Address', '70px');
$dgOrd->set_col_width('Salary', '45px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>