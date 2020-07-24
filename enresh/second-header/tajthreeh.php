<?php 

$maxRows_tajthree = 300;
$pageNum_tajthree = 0;
if (isset($_GET['pageNum_tajthree'])) {
  $pageNum_tajthree = $_GET['pageNum_tajthree'];
}
$startRow_tajthree = $pageNum_tajthree * $maxRows_tajthree;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_tajthree = "SELECT * FROM taj_region3_14944 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_tajthree = sprintf("%s LIMIT %d, %d", $query_tajthree, $startRow_tajthree, $maxRows_tajthree);
$tajthree = mysql_query($query_limit_tajthree, $conn_entekhab) or die(mysql_error());
$row_tajthree = mysql_fetch_assoc($tajthree);

if (isset($_GET['totalRows_tajthree'])) {
  $totalRows_tajthree = $_GET['totalRows_tajthree'];
} else {
  $all_tajthree = mysql_query($query_tajthree);
  $totalRows_tajthree = mysql_num_rows($all_tajthree);
}
$totalPages_tajthree = ceil($totalRows_tajthree/$maxRows_tajthree)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">