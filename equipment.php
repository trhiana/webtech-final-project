<?php

include_once("phpGrid/conf.php");
?>


<?php
$_GET['currentPage'] = 'equipment';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT BranchId, EquipmentId, EmployeeId, EquipmentName, 
Date_of_Last_Service, Date_of_Next_Service FROM equipment', 'EquipmentId', 'equipment');
$dgOrd->set_sortname('EquipmentId', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('EquipmentId', 'Equipment ID');
$dgOrd->set_col_title('BranchId', 'Branch ID');
$dgOrd->set_col_title('EmployeeId', 'Employee ID');
$dgOrd->set_col_title('EquipmentName', 'Equipment Name');
$dgOrd->set_col_title('Date_of_Last_Service', 'Date of Last Service');
$dgOrd->set_col_title('Date_of_Next_Service', 'Date of Next Service');

$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(100);

$dgOrd->set_col_width('EquipmentId', '40px');
$dgOrd->set_col_width('BranchId', '35px');
$dgOrd->set_col_width('EmployeeId', '35px');
$dgOrd->set_col_width('EquipmentName', '55px');
$dgOrd->set_col_width('Date_of_Last_Service', '55px');
$dgOrd->set_col_width('Date_of_Next_Service', '55px');
$dgOrd->set_col_width('Phone_Number', '55px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>