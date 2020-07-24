<?php
$maxRows_zabone = 300;
$pageNum_zabone = 0;
if (isset($_GET['pageNum_zabone'])) {
  $pageNum_zabone = $_GET['pageNum_zabone'];
}
$startRow_zabone = $pageNum_zabone * $maxRows_zabone;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_zabone = "SELECT * FROM zab_region1_259 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_zabone = sprintf("%s LIMIT %d, %d", $query_zabone, $startRow_zabone, $maxRows_zabone);
$zabone = mysql_query($query_limit_zabone, $conn_entekhab) or die(mysql_error());
$row_zabone = mysql_fetch_assoc($zabone);

if (isset($_GET['totalRows_zabone'])) {
  $totalRows_zabone = $_GET['totalRows_zabone'];
} else {
  $all_zabone = mysql_query($query_zabone);
  $totalRows_zabone = mysql_num_rows($all_zabone);
}
$totalPages_zabone = ceil($totalRows_zabone/$maxRows_zabone)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">