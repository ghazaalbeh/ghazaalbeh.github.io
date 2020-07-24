<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="stylesheet-image-based.css">

<style>
 body{
             font-family:BRoya,'BRoya',tahoma;
             font-size:16px;
			 text-align:right;
			 float:right;
			 background-color:#E9F0F0;
            }
input[type="text"] {
  
  margin: 0;
  width:180px;
  
  appearance: none;
  box-shadow: none;
  border-radius:5px;
  text-align:right;
}
input[type="text"]:focus {
  outline: none;
}
input[type="text"] {
 
  border: solid 1px #dcdcdc;
  transition: box-shadow 0.3s, border 0.3s;
}
input[type="text"]:focus,
input[type="text"].focus {
  border: solid 1px #fff;
  box-shadow: 0 0  5px 1px #969696;
}
select:focus {   border: solid 1px #fff; box-shadow: 0 0  5px 1px #969696;

 }
 select{   border-radius:5px;
  border: solid 1px #dcdcdc; text-align:right; padding:2px; padding-right:5px; transition: box-shadow 0.3s, border 0.3s; width:180px;

}
option{ width:100%; margin:5px;}

 @media only screen and (min-width:900px) { .row{ width:1000px;}}


</style>
<?php 
$greshte=$_POST["sreshte"];
$gsahmie=$_POST["ssahmie"];

$gsareshte=$_POST["sareshte"];
$gsauni=$_POST["sauni"];

 ?>
<div class="row" style="margin-left:auto; margin-right:auto; margin-top:10px; margin-bottom:0px;">
<div class="col-md-2">
</div>
<center>
<div class="col-md-4">
<img style=" border:3px solid #c4fd22;" src="logo.png" alt="هیوا" class="img-circle">
<h4> تخصصی ترین مرکز مشاوره کشور</h4>
<h4> هدایت یادگیری وارستگی آرامش</h4>
</div>
</center>
<div class="col-md-6">
</div>
</div>
<center>
<div class="row" style=" margin-left:auto; margin-right:auto; margin-top:10px; margin-bottom:0px;">
<div class="example">
      <div class="col-md-6" style=" width:320px;  margin:10px; -webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px; border:2px dotted white; padding:5px;">
        <input onclick="avali()" id="radio1" type="radio" name="radio" value="1" checked="checked"><label for="radio1">انتخاب رشته بر اساس رتبه</label>
      </div>
      <div class="col-md-6" style=" width:320px; margin:10px; -webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px; border:2px dotted white; padding:5px;">
        <input onclick="dovomi()" id="radio2" type="radio" name="radio" value="2"><label for="radio2">انتخاب رشته بر اساس رشته و دانشگاه</label>
      </div>
     
    </div>
    </div>
   
<div class="row" style=" margin-top:10px; margin-left:auto; margin-right:auto; ">
 <div class="col-md-6" style="background-color:#fff; width:320px; height:320px; margin:10px;padding:20px; -webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;">
<form id="rotbe"  action="indexAction.php" method="post">
<span id="spryselect1">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;رشته</label>

<select   name="sreshte" id="sreshte" tabindex="5">
   <option selected="selected" >انتخاب کنید</option>
   <option value="ریاضی">ریاضی فیزیک</option>
   <option value="تجربی"> علوم تجربی</option>
  <option value="انسانی">علوم انسانی</option>
    <option value="زبان">زبان</option>

  <option value="هنر">هنر</option>
  
  
</select>

<br/>
<span class="selectRequiredMsg">لطفا یکی از گزینه ها را انتخاب کنید</span></span> <br/>
<span id="spryselect2">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;سهمیه</label>

<select name="ssahmie" id="ssahmie" tabindex="3">
  <option value="یک">منطقه یک</option>
  <option value="دو">منطقه دو</option>
  <option value="سه">منطقه سه</option>
</select>
<br/>
<span class="selectRequiredMsg">لطفا یکی از گزینه ها را انتخاب کنید</span></span><br/> 
<span id="sprytextfield1">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;رتبه در سهمیه</label>
<input  type="text" name="srsahmie" id="srsahmie" tabindex="1" />
<br/>
<span class="textfieldRequiredMsg">لطفا رتبه در سهمیه خود را وارد کنید</span></span><br/><br/><br/>
<input type="submit" class="btn btn-default" value="جستجو"></form>
</div>

<div class="col-lg-6" style="background-color:#fff; width:320px; height:320px; margin:10px;padding:20px;-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;">
<form id="uni" action="secondAction.php" method="post">
<span id="spryselect1">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;رشته</label>

<select  name="sreshte" id="sreshte" tabindex="5">
   <option >انتخاب کنید</option>
  <option value="انسانی">علوم انسانی</option>
  <option value="هنر">هنر</option>
  <option value="ریاضی">ریاضی</option>
  <option value="تجربی">تجربی</option>
  <option value="زبان">زبان</option>
</select> 
<br/>
<span class="selectRequiredMsg">لطفا یکی از گزینه ها را انتخاب کنید</span></span> <br/>
<span id="spryselect2">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;سهمیه</label>

<select name="ssahmie" id="ssahmie" tabindex="3">
  <option value="یک">منطقه یک</option>
  <option value="دو">منطقه دو</option>
  <option value="سه">منطقه سه</option>
</select>
<br/>
<span class="selectRequiredMsg">لطفا یکی از گزینه ها را انتخاب کنید</span></span><br/> 
<span id="sprytextfield1">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;رشته</label>

<input type="text" name="sareshte" id="sareshte" tabindex="1" />
<br/>
<span  class="textfieldRequiredMsg text-warning">لطفا رشته مورد علاقه خود را وارد کنید</span></span><br/>
<span id="sprytextfield2">
  <label style="float:right;" class="control-label" for="inputSuccess1">&nbsp;دانشگاه </label>

<input type="text" name="sauni" id="sauni" tabindex="1" />
<br/>
<span class="textfieldRequiredMsg">لطفا رشته مورد علاقه خود را وارد کنید</span></span>
<br/>

<input type="submit" class="btn btn-default" value="جستجو"></form>
</div>
</div>
</div>

<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
<script>
function disableForm(form) {
var length = form.elements.length,
    i;
  for (i=0; i < length; i++) {
    form.elements[i].disabled = true;
  }
  }
function enableForm(form) {
var length = form.elements.length,
    i;
  for (i=0; i < length; i++) {
    form.elements[i].disabled = false;
  }
  }
function avali(){
	disableForm(document.getElementById('uni'));
		enableForm(document.getElementById('rotbe'));

	}
function dovomi(){
	disableForm(document.getElementById('rotbe'));
		enableForm(document.getElementById('uni'));

	}	


</script>

</center>

<div style=" margin:10px; padding:5px; border:3px dotted white;border-radius:5px;">
<p>کاربر محترم<br/>
 رشته ی <?php echo $greshte ?>  در منطقه  <?php echo $gsahmie; ?> رشته مورد علاقه شما  <?php echo $gsareshte; ?> دانشگاه مورد علاقه شما  <?php echo $gsauni; ?></p>
</div>
<br/>
