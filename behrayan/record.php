<?php require_once('Connections/behrayan.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_behrayan, $behrayan);
$query_Recordset1 = "SELECT * FROM orders ORDER BY packetChoice DESC";
$Recordset1 = mysql_query($query_Recordset1, $behrayan) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Record</title>
</head>

<body>
<table border="1" style="background-color:#FFFFFF; border-collapse:collapse;border:1px solid #00CCFF;color:#000000;width:100" cellpadding="10" cellspacing="7">
<tr>
		<td>packetChoice</td>
		<td>storeName</td>
		<td>products</td>
		<td>colorChoice </td>
		<td>firstColor</td>
		<td>secondColor </td>
		<td>thirdColor</td>
		<td>fourthColor</td>
		<td>fifthColor</td>
		<td>name</td>
		<td>email</td>
		<td>tel</td>
		<td>address </td>
		<td>others</td>
	</tr>
	<?php do { ?>
	  <tr>
	    <td><?php echo $row_Recordset1['packetChoice']; ?></td>
	    <td><?php echo $row_Recordset1['storeName']; ?></td>
	    <td><?php echo $row_Recordset1['products']; ?></td>
	    <td><?php echo $row_Recordset1['colorChoice']; ?></td>
	    <td><?php echo $row_Recordset1['firstColor']; ?></td>
	    <td><?php echo $row_Recordset1['secondColor']; ?></td>
	    <td><?php echo $row_Recordset1['thirdColor']; ?></td>
	    <td><?php echo $row_Recordset1['fourthColor']; ?></td>
	    <td><?php echo $row_Recordset1['fifthColor']; ?></td>
	    <td><?php echo $row_Recordset1['name']; ?></td>
	    <td><?php echo $row_Recordset1['email']; ?></td>
	    <td><?php echo $row_Recordset1['tel']; ?></td>
	    <td><?php echo $row_Recordset1['address']; ?></td>
	    <td><?php echo $row_Recordset1['others']; ?></td>
      </tr>
	  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
