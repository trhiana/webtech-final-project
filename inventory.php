<?php

include_once("phpGrid/conf.php");

$_GET['currentPage'] = 'inventory';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT BranchId, Product_Name, Quantity_delivered, Quantity_available, 
Minimum_quantity, Price FROM inventory', 'Product_Name', 'inventory');
$dgOrd->set_sortname('Product_Name', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('Product_Name', 'Product Name');
$dgOrd->set_col_title('BranchId', 'Branch ID');
$dgOrd->set_col_title('Quantity_available', 'Quantityb Available');
$dgOrd->set_col_title('Quantity_delivered', 'Quantity Delivered');
// $dgOrd->set_col_title('Minimum_quantity', 'Minimum Quantity');

$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(100);

$dgOrd->set_col_width('Product_Name', '50px');
$dgOrd->set_col_width('BranchId', '35px');
$dgOrd->set_col_width('Quantity_delivered', '65px');
$dgOrd->set_col_width('Quantity_available', '65px');
$dgOrd->set_col_width('Minimum_quantity', '65px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>