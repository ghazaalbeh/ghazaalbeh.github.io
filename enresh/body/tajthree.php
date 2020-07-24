

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
        <td><div align="right"><?php echo $row_tajthree['shahr']; ?></div></td>
        <td><div align="right"><?php echo $row_tajthree['ostan']; ?></div></td>
        <td><div align="right"><?php echo $row_tajthree['jens']; ?></div></td>
        <td><div align="right"><?php echo $row_tajthree['sahmie']; ?></div></td>
        <td><div align="right"><?php echo $row_tajthree['keshvar']; ?></div></td>
        <td><div align="right"><?php echo $row_tajthree['reshte']; ?></div></td>
      </tr>
      <?php } while ($row_tajthree = mysql_fetch_assoc($tajthree)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($tajthree);
?>
