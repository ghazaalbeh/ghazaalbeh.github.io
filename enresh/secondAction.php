<?php include 'header.php';?>

 <?php          
             
 
                // populate selected option
                $x = 1;
                if(isset($_POST['sareshte'])) {
                        $x = $_POST['sareshte'];
                }
				
                
                if(isset($_POST['sauni'])) {
                        $y = $_POST['sauni'];
                }
?>

<?php
if (($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==یک)){
 include 'second-header/enoneh.php';
}
if(($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==دو)){
 include 'second-header/entwoh.php';
}
if(($_POST["sreshte"]==انسانی)&&($_POST["ssahmie"]==سه)){
 include 'second-header/enthreeh.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==یک)){
 include 'second-header/hooneh.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==دو)){
 include 'second-header/hotwoh.php';
}
if(($_POST["sreshte"]==هنر)&&($_POST["ssahmie"]==سه)){
 include 'second-header/hothreeh.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==یک)){
 include 'second-header/rioneh.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==دو)){
 include 'second-header/ritwoh.php';
}
if(($_POST["sreshte"]==ریاضی)&&($_POST["ssahmie"]==سه)){
 include 'second-header/rithreeh.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==یک)){
 include 'second-header/tajoneh.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==دو)){
 include 'second-header/tajtwoh.php';
}
if(($_POST["sreshte"]==تجربی)&&($_POST["ssahmie"]==سه)){
 include 'second-header/tajthreeh.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==یک)){
 include 'second-header/zaboneh.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==دو)){
 include 'second-header/zabtwoh.php';
}
if(($_POST["sreshte"]==زبان)&&($_POST["ssahmie"]==سه)){
 include 'second-header/zabthreeh.php';
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/custom.js"></script>
 <link href='http://www.fontonline.ir/css/BRoya.css' rel='stylesheet' type='text/css'> 
<title>نمایش نتایج</title>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/npm.js"></script>

 <style>
             body{
             font-family:BRoya,'BRoya',tahoma;
             font-size:16px;
			 text-align:right;
			 
			 background-color:#E9F0F0;
            }
        </style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body style=" background-color:#E9F0F0; font-family:BRoya,'BRoya',tahoma;
             font-size:16px;
			 text-align:right;">
<?php include 'searchret.php';?>
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