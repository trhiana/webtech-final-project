<?php

include_once("phpGrid/conf.php");
?>


<?php
$_GET['currentPage'] = 'branches';
include_once('menu.php');
?>


<?php
$dgOrd = new C_DataGrid('SELECT BranchId, Branch_Name, Location FROM branch', 'BranchId', 'branches');
$dgOrd->set_sortname('BranchId', 'DESC');
$dgOrd->set_col_hidden('id', false);

$dgOrd->set_col_title('Branch_Name', 'Branch Name');
$dgOrd->set_col_title('BranchId', 'Branch ID');
$dgOrd->set_col_title('FirstName', 'First Name');


$dgOrd->enable_edit('FORM');
$dgOrd->set_pagesize(10);

$dgOrd->set_col_width('Branch_Name', '50px');
$dgOrd->set_col_width('Location', '35px');
$dgOrd->set_col_width('BranchId', '35px');


$dgOrd->enable_edit('FORM');

$dgOrd->display();
?>


<script>
$(function(){	
	$(".add-new-row").on("click",function(){
		$("#add_orders").click();
	});
});
</script>