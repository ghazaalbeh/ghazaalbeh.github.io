<?php 
$maxRows_zabtwo = 300;
$pageNum_zabtwo = 0;
if (isset($_GET['pageNum_zabtwo'])) {
  $pageNum_zabtwo = $_GET['pageNum_zabtwo'];
}
$startRow_zabtwo = $pageNum_zabtwo * $maxRows_zabtwo;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_zabtwo = "SELECT * FROM zab_region2_531 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_zabtwo = sprintf("%s LIMIT %d, %d", $query_zabtwo, $startRow_zabtwo, $maxRows_zabtwo);
$zabtwo = mysql_query($query_limit_zabtwo, $conn_entekhab) or die(mysql_error());
$row_zabtwo = mysql_fetch_assoc($zabtwo);

if (isset($_GET['totalRows_zabtwo'])) {
  $totalRows_zabtwo = $_GET['totalRows_zabtwo'];
} else {
  $all_zabtwo = mysql_query($query_zabtwo);
  $totalRows_zabtwo = mysql_num_rows($all_zabtwo);
}
$totalPages_zabtwo = ceil($totalRows_zabtwo/$maxRows_zabtwo)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">