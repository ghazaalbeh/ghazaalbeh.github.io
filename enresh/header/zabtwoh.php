<?php 
$maxRows_zabtwo = 300;
$pageNum_zabtwo = 0;
if (isset($_GET['pageNum_zabtwo'])) {
  $pageNum_zabtwo = $_GET['pageNum_zabtwo'];
}
$startRow_zabtwo = $pageNum_zabtwo * $maxRows_zabtwo;
mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_zabtwoet = "SELECT pk FROM zab_region2_531 WHERE sahmie IN ($x,$x+1,$x+2,$x+3,$x+4,$x+5,$x+6,$x+7,$x+8,$x+9,$x+10,$x+11,$x+12,$x+13,$x+14,$x+15,$x+16,$x+17,$x+18,$x+19,$x+20,$x+21,$x+22,$x+23,$x+24,$x+25,$x+26,$x+27,$x+28,$x+29,$x+30,$x+31,$x+32,$x+33,$x+34,$x+35,$x+36,$x+37,$x+38,$x+39,$x+40,$x+41,$x+42,$x+43,$x+44,$x+45,$x+46,$x+47,$x+48,$x+49,$x+50,$x+51,$x+52,$x+53,$x+54,$x+55,$x+56,$x+57,$x+58,$x+59,$x+60,$x+61,$x+62,$x+63,$x+64,$x+65,$x+66,$x+67,$x+68,$x+69,$x+70,$x+71,$x+72,$x+73,$x+74,$x+75,$x+76,$x+77,$x+78,$x+79,$x+80,$x+81,$x+82,$x+83,$x+84,$x+85,$x+86,$x+87,$x+88,$x+89,$x+90,$x+91,$x+92,$x+93,$x+94,$x+95,$x+96,$x+97,$x+98,$x+99,$x+100)";
$query_limit_zabtwoet = sprintf("%s LIMIT %d, %d", $query_zabtwoet, $startRow_zabtwo, $maxRows_zabtwo);
$zabtwoet = mysql_query($query_limit_zabtwoet, $conn_entekhab) or die(mysql_error());

$row_zabtwo = mysql_fetch_assoc($zabtwoet);


$w = $row_zabtwo['pk'];
$z = $w + 150;
$y = $w - 150;
mysql_select_db($database_conn_entekhab, $conn_entekhab);
$query_zabtwo = "SELECT * FROM zab_region2_531 WHERE pk BETWEEN $y AND $z";
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