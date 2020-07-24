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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form")) {
  $insertSQL = sprintf("INSERT INTO apporder (AppPacketChoice, AppStoreName, AppWebAddress, AppName, AppEmail, AppTel, AppAddress, AppOthers) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['packetChoice'], "text"),
                       GetSQLValueString($_POST['storeName'], "text"),
                       GetSQLValueString($_POST['web-address'], "text"),
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['tel'], "text"),
                       GetSQLValueString($_POST['address'], "text"),
                       GetSQLValueString($_POST['others'], "text"));

  mysql_select_db($database_behrayan, $behrayan);
  $Result1 = mysql_query($insertSQL, $behrayan) or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Behrayan | App Form</title>
 	<script src="js/respond.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href='http://www.fontonline.ir/css/BRoya.css' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="js/jscolor.js"></script>
</head>
<style> 
    input.color
    {
		text-indent:-9999px;
		border:none;
		height:52px;
		width:52px;
	
    }

</style>
<body>
<div class="container-fluid">
<div class="top-menu">فروشگاه ساز بهرایان
<a href="index.html"><div id="logo"></div></a>
</div>
<!--order-process-->
<div class="order-process-section">
<div class="row">
  <div class="col-md-2 col-md-offset-1 ">
  		<img class="img-responsive" src="img/بهرایان---فرم_06.png" alt="فروشگاه اینترنتی"/>
        <p> اپلیکیشن فروشگاه شما طراحی و کد نویسی شده و 
تحویل داده میشود</p>
  </div>
  <div class="col-md-2">
  		<img class="img-responsive" src="img/بهرایان---فرم_03.jpg" alt="فرم قرارداد"/>
        <p>پس از تایید طرح اولیه همکاران ما 
با شما قرار داد میبندند </p>
  </div>
  <div class="col-md-2">
  		<img class="img-responsive" src="img/بهرایان---فرم_03-09.jpg" alt="ارسال طرح اولیه"/>
        <p>طرح اولیه اپلیکیشن شما طراحی شده 
و  به آدرس ایمیل شما ارسال میگردد</p>
  </div>
  <div class="col-md-2">
  		<img class="img-responsive" src="img/بهرایان---فرم_03-11.jpg" alt="تماس با مشتری"/>
        <p>برای تکمیل اطلاعات با شما تماس گرفته میشود</p>
  </div>
  <div class="col-md-2 ">
  		<img class="img-responsive" src="img/بهرایان---فرم_13.jpg" alt="فرم ثبت نام"/>
        <p>فرم زیر را پر کرده و ارسال کنید</p>
  </div>
  
</div>
</div>
<!--end of order-process-->
<div id="header-form"><p>برای سفارش اپلیکیشن فرم زیر را پر کنید</p></div>
<div id="form">


<form accept-charset="utf-8" name="form" action="<?php echo $editFormAction; ?><?php echo $editFormAction; ?>" method="POST">
<div id="border-dashed">
<div class="form">
<h4 class="parsian">بسته ی مناسب خود را انتخاب کنید </h4>
<h4 class="parsian">برای اطلاعات بیشتر در مورد جزئیات بسته ها به لینک <a href="pricing.php">قیمت ها و ویژگی ها </a>مراجعه کنید</h4>
<div class="price-table">
	<div class="row">
  <p>
  
   <div class="col-md-3 col-md-offset-1  price">
                        	<center><h3>بسته سفارشی</h3></center>
                            <br/>
                            <center><h4>اپلیکیشن سفارشی برای کسب و کار شما</h4></center><br/>
                            <div id="price"><center><h3>قیمت توافقی</h3></center></div>
   
      <input type="radio" name="packetChoice" value="special" id="packetChoice_1" />
      </label>
    </div>
    <div class="col-md-3 price">
                        	<center><h3>بسته متوسط</h3></center><br/>
                            <center><h4>ارایه اپلیکیشن روی بازار و دیده شدن در برابر مخاطب چند میلیونی </h4></center><br/>
                            <center><h4>بروز رسانی آن لاین محصولات در اپلیکیشن از طریق پنل اینترنتی</h4></center><br/>
                            <center><h4>ارسال پیشنهادات و تخفیف ها به صورت نوتیفیکیشن</h4></center><br/>
                            <center><h4>امکان دریافت سفارش خرید از داخل اپلیکیشن</h4></center><br/>
                            <center><h4 >نمایش سه بعدی فضای کار در اپلیکیشن  به ویژه برای رستوران ها<br />بدون احتساب هزینه عکس برداری سه بعدی</h4></center><br/>
                            <div id="price"><center><h3>تومان 800,000</h3></center></div>
                            
    <label>
      <input type="radio" name="packetChoice" value="average" id="packetChoice_2" />
      </label>
    </div>
    <div class="col-md-3 price">
    <center><h3>بسته اقتصادی</h3></center><br/>
                            <center><h4>ارایه اپلیکیشن روی بازار و دیده شدن در برابر مخاطب چند میلیونی </h4></center><br/>
                            <center><h4 class="line-through">بروز رسانی آن لاین محصولات در اپلیکیشن از طریق پنل اینترنتی</h4></center><br/>
                            <center><h4>ارسال پیشنهادات و تخفیف ها به صورت نوتیفیکیشن</h4></center><br/>
                            <center><h4 class="line-through">امکان دریافت سفارش خرید از داخل اپلیکیشن</h4></center><br/>
                            <center><h4 class="line-through">نمایش سه بعدی فضای کار در اپلیکیشن  به ویژه برای رستوران ها<br />بدون احتساب هزینه عکس برداری سه بعدی</h4></center><br/>
                            <div id="price"><center><h3>تومان 400,000</h3></center></div>
                             <label>
      <input type="radio" name="packetChoice" value="basic" id="packetChoice_3" />
      </label>
                            </div>
  </p>
  	</div>
</div>
<div class="shop-form">
	<label for="shop-name" class="form-label">نام فروشگاه شما</label>
  <input id="shop-name" class="form-control" name="storeName" type="text" /><br />
  <label for="web-address" class="form-label">آدرس اینترنتی فروشگاه شما</label>
  <input name="web-address" id="products" class="form-control" type="text" />
</div>
	
      <br />
      <div class="information-form">
      <label for="customer-name" class="form-label">نام و نام خانوادگی شما</label>
      <input name="name" class="form-control" type="text" /><br />
      <label for="customer-email" class="form-label">ایمیل                   </label>
      <input name="email"  class="form-control" type="text" /><br />
      <label for="customer-tel" class="form-label">تلفن تماس                   </label>
      <input name="tel"  class="form-control" type="text" /><br />
      <label for="customer-address" class="form-label">آدرس                   </label>
      <input name="address"  class="form-control" type="text" /><br />
      <label for="customer-description" class="form-label">توضیحات                   </label>
      <input name="others"  class="form-control" type="text" /><br />
      <input type="hidden" name="MM_insert" value="form" />
      </div>
      </div>
      </div>
      <div id="send-button"> 
      
      <input value="انصراف" type="reset" />
      <input value="ارسال" type="submit" />
      </div>
</form>
</div>
</div>
<div class="row footer" style="margin-right:30px; margin-bottom:30px; text-align:right; list-style:none;">
  <div class="col-md-3">
  		<ul style="list-style:none;">
  			<li style="color:#FFFFFF;">به ما بپیوندید</li>
            <br/>
            <li>
            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
             <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
             <a href="https://www.pinterest.com/behrayanshop/"><i class="fa fa-pinterest-p fa-lg"></i></a>
              <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
           
            
            
            
           
           
            </li>
            
  		</ul>
  </div>
  <div class="col-md-3">
  <ul style="list-style:none;">
  			<li style="color:#FFFFFF;">بهرایان</li>
            <li><a href="#">تماس با ما</a></li>
            <li><a href="#">همکاری با ما</a></li>
            <li><a href="#">درباره ما</a></li>
            
  		</ul>
  </div>
  <div class="col-md-3">
  <ul style="list-style:none;">
  			<li style="color:#FFFFFF;">اطلاعات</li>
            <li><a href="payment.php">درگاه های پرداخت آنلاین</a></li>
            <li><a href="shipping.php">پنل پستی آسمان وب</a></li>
            <li><a href="pricing.php">قیمت ها و ویژگی های فروشگاه</a></li>
            
            
  		</ul>
  </div>
  <div class="col-md-3">
  <ul style="list-style:none;">
  			<li style="color:#FFFFFF;">فروشگاه اینترنتی</li>
            <li><a href="gallery.php">گالری فروشگاه های آماده</a></li>
            <li><a href="form.php">سفارش فروشگاه</a></li>
            <li><a href="formapp.php">سفارش اپلیکیشن</a></li>
            <li><a href="training.php">آموزش مدیریت فروشگاه</a></li>
          
  		</ul>
  </div>
</div>
<div class="row footer" style="margin-right:30px; margin-bottom:30px; text-align:right; list-style:none;">
  
  <div class="col-md-4" style=" color:#E8F0FA; padding:30px;"> Copyright © 2015 Behrayan-shop.com </div>
  <div class="col-md-8" style=" color:#E8F0FA; padding:30px;">استفاده از مطالب سايت بهرایان فقط برای مقاصد غیر تجاری و با ذکر منبع بلامانع است کليه حقوق اين سايت متعلق به شرکت پارس بهرایان پژوه می‌باشد </div>
</div>
<!-- javascript -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>