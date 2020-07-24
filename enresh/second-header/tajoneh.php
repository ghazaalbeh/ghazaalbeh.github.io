<?php 
$maxRows_tajone = 300;
$pageNum_tajone = 0;
if (isset($_GET['pageNum_tajone'])) {
  $pageNum_tajone = $_GET['pageNum_tajone'];
}
$startRow_tajone = $pageNum_tajone * $maxRows_tajone;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_tajone = "SELECT * FROM taj_region1_9708 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_tajone = sprintf("%s LIMIT %d, %d", $query_tajone, $startRow_tajone, $maxRows_tajone);
$tajone = mysql_query($query_limit_tajone, $conn_entekhab) or die(mysql_error());
$row_tajone = mysql_fetch_assoc($tajone);

if (isset($_GET['totalRows_tajone'])) {
  $totalRows_tajone = $_GET['totalRows_tajone'];
} else {
  $all_tajone = mysql_query($query_tajone);
  $totalRows_tajone = mysql_num_rows($all_tajone);
}
$totalPages_tajone = ceil($totalRows_tajone/$maxRows_tajone)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
