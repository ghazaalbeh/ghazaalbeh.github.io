
<?php include 'header.php';?>
<?php
$x = (is_numeric($_POST["srsahmie"]) ? (int)$_POST["srsahmie"] : 0);

?>
<?php
if (($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==یک)){
 include 'header/enoneh.php';
}
if(($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==دو)){
 include 'header/entwoh.php';
}
if(($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==سه)){
 include 'header/enthreeh.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==یک)){
 include 'header/hooneh.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==دو)){
 include 'header/hotwoh.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==سه)){
 include 'header/hothreeh.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==یک)){
 include 'header/rioneh.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==دو)){
 include 'header/ritwoh.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==سه)){
 include 'header/rithreeh.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==یک)){
 include 'header/tajoneh.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==دو)){
 include 'header/tajtwoh.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==سه)){
 include 'header/tajthreeh.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==یک)){
 include 'header/zaboneh.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==دو)){
 include 'header/zabtwoh.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==سه)){
 include 'header/zabthreeh.php';
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<script type="text/javascript" src="js/custom.js"></script>
 <link href='http://www.fontonline.ir/css/BRoya.css' rel='stylesheet' type='text/css'> 
<title>نمایش نتایج</title>
<link href="css/custom.css" rel="stylesheet" type="text/css">

<style>
body{
             font-family:BRoya,'BRoya',tahoma;
             font-size:16px;
			 text-align:right;
			 
			 background-color:#E9F0F0;
            }

</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/npm.js"></script>

</head>
<body style=" background-color:#E9F0F0; font-family:BRoya,'BRoya',tahoma;
             font-size:16px;
			 text-align:right;">
<?php include 'searchre.php';?>


<a  style="margin:10px;" class="btn btn-default" href="javascript:if(window.print)window.print()">چاپ</a>

<?php
if (($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==یک)){
 include 'body/enone.php';
}
if(($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==دو)){
 include 'body/entwo.php';
}
if(($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==سه)){
 include 'body/enthree.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==یک)){
 include 'body/hoone.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==دو)){
 include 'body/hotwo.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==سه)){
 include 'body/hothree.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==یک)){
 include 'body/rione.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==دو)){
 include 'body/ritwo.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==سه)){
 include 'body/rithree.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==یک)){
 include 'body/tajone.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==دو)){
 include 'body/tajtwo.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==سه)){
 include 'body/tajthree.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==یک)){
 include 'body/zabone.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==دو)){
 include 'body/zabtwo.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==سه)){
 include 'body/zabthree.php';
}
?>
<br/>
<br/>
<br/>
</center>
<div class="row" style="margin-left:auto; margin-right:auto; margin-top:10px; margin-bottom:0px;">
<div class="col-md-2">
</div>
<div class="col-md-4"><center>طراحی و برنامه نویسی سایت: شرکت پارس بهرایان پژوه<br/>
تلفن: ۴۴۱۳۲۷۵۷ -۰۲۱<br/>
ایمیل:‌behrayan@icloud.com</center>
</div>
</div>