<?php

$maxRows_hothree = 300;
$pageNum_hothree = 0;
if (isset($_GET['pageNum_hothree'])) {
  $pageNum_hothree = $_GET['pageNum_hothree'];
}
$startRow_hothree = $pageNum_hothree * $maxRows_hothree;
mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_hothreeet = "SELECT pk FROM ho_region3_103 WHERE sahmie IN ($x,$x+1,$x+2,$x+3,$x+4,$x+5,$x+6,$x+7,$x+8,$x+9,$x+10,$x+11,$x+12,$x+13,$x+14,$x+15,$x+16,$x+17,$x+18,$x+19,$x+20,$x+21,$x+22,$x+23,$x+24,$x+25,$x+26,$x+27,$x+28,$x+29,$x+30,$x+31,$x+32,$x+33,$x+34,$x+35,$x+36,$x+37,$x+38,$x+39,$x+40,$x+41,$x+42,$x+43,$x+44,$x+45,$x+46,$x+47,$x+48,$x+49,$x+50,$x+51,$x+52,$x+53,$x+54,$x+55,$x+56,$x+57,$x+58,$x+59,$x+60,$x+61,$x+62,$x+63,$x+64,$x+65,$x+66,$x+67,$x+68,$x+69,$x+70,$x+71,$x+72,$x+73,$x+74,$x+75,$x+76,$x+77,$x+78,$x+79,$x+80,$x+81,$x+82,$x+83,$x+84,$x+85,$x+86,$x+87,$x+88,$x+89,$x+90,$x+91,$x+92,$x+93,$x+94,$x+95,$x+96,$x+97,$x+98,$x+99,$x+100)";
$query_limit_hothreeet = sprintf("%s LIMIT %d, %d", $query_hothreeet, $startRow_hothree, $maxRows_hothree);
$hothreeet = mysql_query($query_limit_hothreeet, $conn_entekhab) or die(mysql_error());

$row_hothree = mysql_fetch_assoc($hothreeet);

$w = $row_hothree['pk'];
$z = $w + 150;
$y = $w - 150;
mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_hothree = "SELECT * FROM ho_region3_103 WHERE pk BETWEEN $y AND $z";
$query_limit_hothree = sprintf("%s LIMIT %d, %d", $query_hothree, $startRow_hothree, $maxRows_hothree);
$hothree = mysql_query($query_limit_hothree, $conn_entekhab) or die(mysql_error());
$row_hothree = mysql_fetch_assoc($hothree);

if (isset($_GET['totalRows_hothree'])) {
  $totalRows_hothree = $_GET['totalRows_hothree'];
} else {
  $all_hothree = mysql_query($query_hothree);
  $totalRows_hothree = mysql_num_rows($all_hothree);
}
$totalPages_hothree = ceil($totalRows_hothree/$maxRows_hothree)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">