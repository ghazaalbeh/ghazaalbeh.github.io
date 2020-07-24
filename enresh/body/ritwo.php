

<div align="center">
  <table class="table table-hover" style="background-color:white;" border="1" cellpadding="3">
    <tr>
      <td><div align="right">شهر</div></td>
      <td><div align="right">استان</div></td>
      <td><div align="right">جنسیت</div></td>
      <td><div align="right">سهمیه</div></td>
      <td><div align="right">کشور</div></td>
      <td><div align="right">رشته</div></td>
    </tr>
    <?php do { ?>
      <tr>
        <td><div align="right"><?php echo $row_ritwo['shahr']; ?></div></td>
        <td><div align="right"><?php echo $row_ritwo['ostan']; ?></div></td>
        <td><div align="right"><?php echo $row_ritwo['jens']; ?></div></td>
        <td><div align="right"><?php echo $row_ritwo['sahmie']; ?></div></td>
        <td><div align="right"><?php echo $row_ritwo['keshvar']; ?></div></td>
        <td><div align="right"><?php echo $row_ritwo['reshte']; ?></div></td>
      </tr>
      <?php } while ($row_ritwo = mysql_fetch_assoc($ritwo)); ?>
  </table>
</div>
</body>
</html>
<?php
mysql_free_result($ritwo);
?>
