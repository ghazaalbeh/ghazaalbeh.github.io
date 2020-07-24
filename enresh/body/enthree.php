

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
        <td><div align="right"><?php echo $row_enthree['shahr']; ?></div></td>
        <td><div align="right"><?php echo $row_enthree['ostan']; ?></div></td>
        <td><div align="right"><?php echo $row_enthree['jens']; ?></div></td>
        <td><div align="right"><?php echo $row_enthree['sahmie']; ?></div></td>
        <td><div align="right"><?php echo $row_enthree['keshvar']; ?></div></td>
        <td><div align="right"><?php echo $row_enthree['reshte']; ?></div></td>
      </tr>
      <?php } while ($row_enthree = mysql_fetch_assoc($enthree)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($enthree);
?>
