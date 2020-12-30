<?php

include_once("phpGrid/conf.php");
?>


<?php
$_GET['currentPage'] = 'suppliers';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT BranchId, SupplierId, Name, Phone_Number, Address, Quantity_delivered, Delivery_date FROM suppliers', 'SupplierId', 'suppliers');
$dgOrd->set_sortname('SupplierId', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('SupplierId', 'Supplier ID');
$dgOrd->set_col_title('BranchId', 'Branch ID');
$dgOrd->set_col_title('Delivery_date', 'Delivery Date');
$dgOrd->set_col_title('Quantity_delivered', 'Quantity Delivered');
$dgOrd->set_col_title('Phone_Number', 'Telephone');

$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(100);

$dgOrd->set_col_width('SupplierId', '50px');
$dgOrd->set_col_width('BranchId', '35px');
$dgOrd->set_col_width('Quantity_delivered', '65px');
// $dgOrd->set_col_width('LastName', '40px');
// $dgOrd->set_col_width('Gender', '35px');
$dgOrd->set_col_width('Delivery_date', '55px');
$dgOrd->set_col_width('Phone_Number', '55px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>