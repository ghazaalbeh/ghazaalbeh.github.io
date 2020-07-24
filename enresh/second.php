<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://www.fontonline.ir/css/BRoya.css' rel='stylesheet' type='text/css'> 
<title>انتخاب رشته</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style>
 body{
             font-family:BRoya,'BRoya',tahoma;
             font-size:18px;
			 text-align:right;
			 float:right;
            }
</head>
</style>
</head>

<body>
<form action="secondAction.php" method="post">
<span id="spryselect1">رشته
<select name="sreshte" id="sreshte" tabindex="5">
   <option >انتخاب کنید</option>
  <option value="انسانی">علوم انسانی</option>
  <option value="هنر">هنر</option>
  <option value="ریاضی">ریاضی</option>
  <option value="تجربی">تجربی</option>
  <option value="زبان">زبان</option>
</select>
<span class="selectRequiredMsg">لطفا یکی از گزینه ها را انتخاب کنید</span></span> <br/>
سهمیه<span id="spryselect2">
<select name="ssahmie" id="ssahmie" tabindex="3">
  <option value="یک">منطقه یک</option>
  <option value="دو">منطقه دو</option>
  <option value="سه">منطقه سه</option>
</select>
<span class="selectRequiredMsg">لطفا یکی از گزینه ها را انتخاب کنید</span></span><br/> 
رشته موردعلاقه<span id="sprytextfield1">
<input type="text" name="sareshte" id="sareshte" tabindex="1" />
<span class="textfieldRequiredMsg">لطفا رشته مورد علاقه خود را وارد کنید</span></span><br/>
دانشگاه موردعلاقه<span id="sprytextfield2">
<input type="text" name="sauni" id="sauni" tabindex="1" />
<span class="textfieldRequiredMsg">لطفا رشته مورد علاقه خود را وارد کنید</span></span><br/>
<input type="submit">جستجو</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield2");

</script>
</body>
</html>