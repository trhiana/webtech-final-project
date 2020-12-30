<?php

include_once("phpGrid/conf.php");
?>


<?php
$_GET['currentPage'] = 'payments';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT BranchId, PId, SupplierId, Service, Amount, Payment_to, 
Date_of_Payment FROM payments', 'PId', 'payments');
$dgOrd->set_sortname('PId', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('BranchId', 'Branch ID');
$dgOrd->set_col_title('PId', 'Payment ID');
$dgOrd->set_col_title('SupplierId', 'Supplier ID');
$dgOrd->set_col_title('Payment_to', 'Payment To');
$dgOrd->set_col_title('Date_of_Payment', 'Date of Payment');

$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(100);

$dgOrd->set_col_width('BranchId', '50px');
$dgOrd->set_col_width('PId', '50px');
$dgOrd->set_col_width('SupplierId', '45px');
$dgOrd->set_col_width('Date_of_Payment', '55px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>