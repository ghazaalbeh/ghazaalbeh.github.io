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
  $insertSQL = sprintf("INSERT INTO orders (packetChoice, storeName, products, colorChoice, firstColor, secondColor, thirdColor, fourthColor, fifthColor, name, email, tel, address, others) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['packetChoice'], "text"),
                       GetSQLValueString($_POST['storeName'], "text"),
                       GetSQLValueString($_POST['products'], "text"),
                       GetSQLValueString($_POST['colorChoice'], "text"),
                       GetSQLValueString($_POST['firstColor'], "text"),
                       GetSQLValueString($_POST['secondColor'], "text"),
                       GetSQLValueString($_POST['thirdColor'], "text"),
                       GetSQLValueString($_POST['fourthColor'], "text"),
                       GetSQLValueString($_POST['fifthColor'], "text"),
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
<title>Behrayan | Form</title>
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
        <p> فروشگاه شما طراحی و کد نویسی شده و 
تحویل داده میشود</p>
  </div>
  <div class="col-md-2">
  		<img class="img-responsive" src="img/بهرایان---فرم_03.jpg" alt="فرم قرارداد"/>
        <p>پس از تایید طرح اولیه همکاران ما 
با شما قرار داد میبندند </p>
  </div>
  <div class="col-md-2">
  		<img class="img-responsive" src="img/بهرایان---فرم_03-09.jpg" alt="ارسال طرح اولیه"/>
        <p>طرح اولیه فروشگاه شما طراحی شده 
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
<div id="header-form"><p>برای سفارش فروشگاه فرم زیر را پر کنید</p></div>
<div id="form">


<form accept-charset="utf-8" name="form" action="<?php echo $editFormAction; ?>" method="POST">
<div id="border-dashed">
<div class="form">
<h4 class="parsian">بسته ی مناسب خود را انتخاب کنید </h4>
<h4 class="parsian">برای اطلاعات بیشتر در مورد جزئیات بسته ها به لینک <a href="pricing.php">قیمت ها و ویژگی ها </a>مراجعه کنید</h4>
<div class="price-table">
	<div class="row">
  <p>
   <div class="col-md-3 col-md-offset-1 price">
                        	<center><h3>بسته پیشرفته</h3></center>
                            <br/>
                            <center><h4>امکان ارائه تعداد نامحدود محصول</h4></center><br/>
                            <center><h4>امکن طراحی قالب اختصاصی</h4></center><br/>
                            <center><h4>گذرگاه بانک ملت و پارسیان</h4></center><br/>
                            <center><h4>پنل پستی آسمان وب</h4></center><br/>
                            <center><h4 >بهینه شده فوق العاده برای موتورهای جستجو</h4></center><br/>
                            <center><h4> امکان جستجوی محصولات در سایت ، پیشنهاد محصولات، جستجوی خود تکمیل شونده</h4></center><br/>
                            <center><h4 >امکان چت با مشتریانی که در سایت انلاین هستند </h4></center><br/>
                            <center><h4 >ارایه تخفیف بر اساس میزان خرید مشتریان </h4></center><br/>
            <center><h4 >ایجاد کیوآر کد برای همه ی صفحه فروشگاه و محصولات </h4></center><br/>
                            <center><h4>  گارانتی نرم افزار و بروز رسانی به مدت 1 سال</h4></center><br/>
            <center><h4>خدمات بعد از فروش  نامحدود </h4></center><br/>
                            <div id="price"><center><h3>تومان 1,000,000</h3></center></div>
    <label>
      <input type="radio" name="packetChoice" value="basic" id="packetChoice_0" />
      </label>
      </div>
      <div class="col-md-3 price">
                        	<center><h3>بسته متوسط</h3></center>
                            <br/>
                            <center><h4>امکان ارائه تعداد نامحدود محصول</h4></center><br/>
                            <center><h4>امکن طراحی قالب اختصاصی</h4></center><br/>
                            <center><h4>گذرگاه بانک ملت و پارسیان</h4></center><br/>
                            <center><h4>پنل پستی آسمان وب</h4></center><br/>
                            <center><h4 >بهینه شده فوق العاده برای موتورهای جستجو</h4></center><br/>
                            <center><h4 > امکان جستجوی محصولات در سایت ، پیشنهاد محصولات، جستجوی خود تکمیل شونده</h4></center><br/>
                            <center><h4 class="line-through">امکان چت با مشتریانی که در سایت انلاین هستند </h4></center><br/>
                            <center><h4 class="line-through">ارایه تخفیف بر اساس میزان خرید مشتریان </h4></center><br/>
            <center><h4 class="line-through">ایجاد کیوآر کد برای همه ی صفحه فروشگاه و محصولات </h4></center><br/>
                            <center><h4>  گارانتی نرم افزار و بروز رسانی به مدت 1 سال</h4></center><br/>
            <center><h4>خدمات بعد از فروش  نامحدود </h4></center><br/>
                            <div id="price"><center><h3>تومان 600,000</h3></center></div>
    
    <label>
      <input type="radio" name="packetChoice" value="average" id="packetChoice_1" />
      </label>
    </div>
    <div class="col-md-3 price">
                        	<center><h3>بسته اقتصادی</h3></center>
                            <br/>
                            <center><h4>امکان ارائه تعداد نامحدود محصول</h4></center><br/>
                            <center><h4>امکن طراحی قالب اختصاصی</h4></center><br/>
                            <center><h4>گذرگاه بانک ملت و پارسیان</h4></center><br/>
                            <center><h4>پنل پستی آسمان وب</h4></center><br/>
                            <center><h4 class="line-through">بهینه شده فوق العاده برای موتورهای جستجو</h4></center><br/>
                            <center><h4 class="line-through"> امکان جستجوی محصولات در سایت ، پیشنهاد محصولات، جستجوی خود تکمیل شونده</h4></center><br/>
                            <center><h4 class="line-through">امکان چت با مشتریانی که در سایت انلاین هستند </h4></center><br/>
                            <center><h4 class="line-through">ارایه تخفیف بر اساس میزان خرید مشتریان </h4></center><br/>
            <center><h4 class="line-through">ایجاد کیوآر کد برای همه ی صفحه فروشگاه و محصولات </h4></center><br/>
                            <center><h4>  گارانتی نرم افزار و بروز رسانی به مدت 1 سال</h4></center><br/>
            <center><h4>خدمات بعد از فروش  نامحدود </h4></center><br/>
            
            
            
            
                            
                            <div id="price"><center><h3>تومان 400,000</h3></center></div>
    <label>
      <input type="radio" name="packetChoice" value="advance" id="packetChoice_2" />
      </label>
    </div>
  </p>
  	</div>
</div>
<div class="shop-form">
	<label for="shop-name" class="form-label">نام فروشگاه شما</label>
  <input id="shop-name" class="form-control" name="storeName" type="text" /><br />
  <label for="products" class="form-label">جنس یا اجناسی که می خواهید بفروشید                    </label>
  <input name="products" id="products" class="form-control" type="text" />
</div>
	<div class="color-form">
    <label for="pick-color" class="form-label">ترکیب رنگ مورد علاقه شما برای فروشگاهتان</label>
  <p>
  <!--row-one-->
  <div class="row" style="margin:10px;">
  <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_30.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color1" id="colorChoice_0" />
      </label>
       </div>
                        </div>
                      </div>
    <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_33.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color2" id="colorChoice_1" />
      </label>
    </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_40.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color3" id="colorChoice_2" />
      </label>
   </div>
   </div>
   </div>
     </div>
   <!--end-row-one-->
   <!--row-two-->
   <div class="row" style="margin:10px;">
  
                      <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_07.png"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color4" id="colorChoice_3" />
      </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_14.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color5" id="colorChoice_4" />
</label>
    </div>
    </div>
    </div>
     <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_24.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color6" id="colorChoice_5" /></label>
    </div>
    </div>
    </div>
    </div>
    <!--end-row-two-->
    <!--row-three-->
    <div class="row" style="margin:10px;">
     
                      <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_42.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color7" id="colorChoice_6" />
      </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_53.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color8" id="colorChoice_7" />
      </label>
   </div>
   </div>
   </div>
   <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_55.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color9" id="colorChoice_8" />
      </label>
   </div>
   </div>
   </div>
    
    
    </div>
    <!--end-row-three-->
    <!--row-four-->
    <div class="row" style="margin:10px;">
    <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_60.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color11" id="colorChoice_10" />
      </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_61.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color12" id="colorChoice_11" />
      </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_72.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color13" id="colorChoice_12" />
      </label>
    </div>
    </div>
    </div>
    </div>
    <!--end-row-four-->
    <!--row-five-->
     <div class="row" style="margin:10px;">
                      <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/colors_74.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color14" id="colorChoice_13" />
     </label>
   </div>
   </div>
   </div>
   <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_07.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color15" id="colorChoice_14" />
      </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_07-12.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
    
      <input type="radio" name="colorChoice" value="color16" id="colorChoice_15" />
      </label>
    </div>
    </div>
    </div>
    </div>
   
  
    <!--end-row-five-->
   <!--row-six-->
   <div class="row" style="margin:10px;">
                      <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_11.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color17" id="colorChoice_16" />
     </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_12.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color18" id="colorChoice_17" />
      </label>
    </div>
    </div>
    </div>
    <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_14.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color19" id="colorChoice_18" />
      </label>
    </div>
    </div>
    </div>
    </div>
    <!--end-row-six-->
    <!--row-seven-->
    
    <div class="row" style="margin:10px;">
                      <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_17.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color20" id="colorChoice_19" />
     </label>
    </div>
    </div>
    </div>
    
     <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_17-32.jpg"/>
                         </div>
                         <div class="col-md-2">
                         <label>
      <input type="radio" name="colorChoice" value="color21" id="colorChoice_20" />
      </label>
    </div>
    </div>
    </div>
     <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_25.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color22" id="colorChoice_21" />
      </label>
    </div>
    </div>
    </div>
    </div>
    <!--end-row-seven-->
                    <!--row-eight-->
                    <div class="row" style="margin:10px;">
                      <div class="col-md-4">
                        <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_27.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color23" id="colorChoice_22" />
      </label>
   </div>
   </div>
   </div>
    <div class="col-md-4">
                      	<div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_34.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color24" id="colorChoice_23" />
      </label>
    </div>
    </div>
    </div>
     <div class="col-md-4">
                       <div class="row panel-color" style="padding:5px;">
                         <div class="col-md-10">
                         <img class="img-responsive" src="img/pic-colors/بهرایان---فرم_35.jpg"/>
                         </div>
                         <div class="col-md-2">
    <label>
      <input type="radio" name="colorChoice" value="color25" id="colorChoice_24" />
      </label>
    </div>
    </div>
    </div>
    </div>
     <!--end-row-eight-->
                   <br/>
                   <br/>
       
    <label for="pick-color" class="form-label">می توانید با کلیک بر روی مربع های زیر رنگ پنج رنگ مورد علاقه تان را انتخاب کنید</label>
  </p>
  
      <input name="firstColor" class="color" value="E8F0FA">
      <input name="secondColor" class="color" value="E8F0FA">
      <input name="thirdColor" class="color" value="E8F0FA">
      <input name="fourthColor" class="color" value="E8F0FA">
      <input name="fifthColor" class="color" value="E8F0FA">
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
      
      <input value="انصراف"  type="reset" />
      <input  value="ارسال" type="submit" />
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