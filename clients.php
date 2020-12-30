<?php

include_once("phpGrid/conf.php");

$_GET['currentPage'] = 'clients';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT ClientId, EmployeeId, OrderDate, Order, Quantity, Customer_Name, 
Phone_Number FROM clients', 'ClientId', 'clients');
$dgOrd->set_sortname('ClientId', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('EmployeeId', 'Employee ID');
$dgOrd->set_col_title('ClientId', 'Client ID');
$dgOrd->set_col_title('OrderDate', 'Order Date');
$dgOrd->set_col_title('Customer_Name', 'Customer Name');
$dgOrd->set_col_title('Phone_Number', 'Telephone');

$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(100);

$dgOrd->set_col_width('EmployeeId', '50px');
$dgOrd->set_col_width('ClientId', '35px');
$dgOrd->set_col_width('OrderDate', '55px');
$dgOrd->set_col_width('Phone_Number', '55px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>