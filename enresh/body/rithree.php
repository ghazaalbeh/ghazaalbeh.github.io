

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
        <td><div align="right"><?php echo $row_rithree['shahr']; ?></div></td>
        <td><div align="right"><?php echo $row_rithree['ostan']; ?></div></td>
        <td><div align="right"><?php echo $row_rithree['jens']; ?></div></td>
        <td><div align="right"><?php echo $row_rithree['sahmie']; ?></div></td>
        <td><div align="right"><?php echo $row_rithree['keshvar']; ?></div></td>
        <td><div align="right"><?php echo $row_rithree['reshte']; ?></div></td>
      </tr>
      <?php } while ($row_rithree = mysql_fetch_assoc($rithree)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($rithree);
?>
