<?php
$maxRows_ritwo = 300;
$pageNum_ritwo = 0;
if (isset($_GET['pageNum_ritwo'])) {
  $pageNum_ritwo = $_GET['pageNum_ritwo'];
}
$startRow_ritwo = $pageNum_ritwo * $maxRows_ritwo;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_ritwo = "SELECT * FROM ri_region2_19061 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_ritwo = sprintf("%s LIMIT %d, %d", $query_ritwo, $startRow_ritwo, $maxRows_ritwo);
$ritwo = mysql_query($query_limit_ritwo, $conn_entekhab) or die(mysql_error());
$row_ritwo = mysql_fetch_assoc($ritwo);

if (isset($_GET['totalRows_ritwo'])) {
  $totalRows_ritwo = $_GET['totalRows_ritwo'];
} else {
  $all_ritwo = mysql_query($query_ritwo);
  $totalRows_ritwo = mysql_num_rows($all_ritwo);
}
$totalPages_ritwo = ceil($totalRows_ritwo/$maxRows_ritwo)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">