
<div align="center">
  <table class="table table-hover" style="background-color:white;" border="1" cellpadding="3">
    <tr>
      <td><div align="right">شهر</div></td>
      <td><div align="right">استان</div></td>
      <td><div align="right">جنسیت</div></td>
      <td><div align="right">رتبه در سهمیه</div></td>
      <td><div align="right">رتبه در کشور</div></td>
      <td><div align="right">رشته قبولی</div></td>
    </tr>
    <?php do { ?>
      <tr>
        <td><div id="shahr" align="right"><?php echo $row_enone['shahr']; ?></div></td>
        <td><div id="ostan" align="right"><?php echo $row_enone['ostan']; ?></div></td>
        <td><div align="right"><?php echo $row_enone['jens']; ?></div></td>
        <td><div align="right"><?php echo $row_enone['sahmie']; ?></div></td>
        <td><div align="right"><?php echo $row_enone['keshvar']; ?></div></td>
        <td><div align="right"><?php echo $row_enone['reshte']; ?></div></td>
      </tr>
      <?php } while ($row_enone = mysql_fetch_assoc($enone)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($enone);
?>
