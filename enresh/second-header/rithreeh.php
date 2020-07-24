<?php 
$maxRows_rithree = 300;
$pageNum_rithree = 0;
if (isset($_GET['pageNum_rithree'])) {
  $pageNum_rithree = $_GET['pageNum_rithree'];
}
$startRow_rithree = $pageNum_rithree * $maxRows_rithree;

mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_rithree = "SELECT * FROM ri_region3_8008 WHERE reshte LIKE '%$x%' AND reshte LIKE '%$y%'";
$query_limit_rithree = sprintf("%s LIMIT %d, %d", $query_rithree, $startRow_rithree, $maxRows_rithree);
$rithree = mysql_query($query_limit_rithree, $conn_entekhab) or die(mysql_error());
$row_rithree = mysql_fetch_assoc($rithree);

if (isset($_GET['totalRows_rithree'])) {
  $totalRows_rithree = $_GET['totalRows_rithree'];
} else {
  $all_rithree = mysql_query($query_rithree);
  $totalRows_rithree = mysql_num_rows($all_rithree);
}
$totalPages_rithree = ceil($totalRows_rithree/$maxRows_rithree)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">