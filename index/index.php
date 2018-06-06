<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
require_once('../database/db.php');
	
$serv_no=$this->content[0]['serv_no'];
$seg_group=$this->content[0]['seg_group'];
$prod=$this->content[0]['prod'];
	
$remark=$this->content[0]['remark'];
$tix_stat=$this->content[0]['tix_stat'];
$state=$this->content[0]['state'];	
?>

<div class="container">
<div class="row clearfix">
<div class="col-md-12 column">

<form action ="<?php echo URL; ?> index/edit_submit_index" method="post"

enctype = "multipart/form-data"
onsubmit "return confirm ('Do you really to submit the form? ');>
<div class = "col-xs-6 form_group">ADD NEW TICKET</div>
<div class ="col-xs-6">
  <form id="form1" name="form1" method="post">
    <div class = "col-xs-6 form_group">
      <label class ="control-label col-xs-6" for ="serv_no" >Ticket ID </label>
      <div class ="col-xs-6 ">
        <input	name="email" type="text" class="form-control" id = "email" placeholder ="enter email" readonly="readonly">
      </div>
    </div>
    <div class ="col-xs-6 ">
    <for ="serv_no" >
    Service No:
    </label>
    <div class ="col-xs-6">
      <input name ="serv_no" type="text" class="form_control" id ="serv_no" placeholder ="Enter Service No" readonly="readonly">
    </div>
    <div class ="col-xs-6 ">
    <for ="seg_group" >
Segment Group:
<div class ="col-xs-6">
  <input name ="seg_group" type="text" required="required" class="form_control" id ="seg_group" placeholder ="Enter Segment Group">
</div>
<div class ="col-xs-6 ">
<for ="prod" >
Product:
<div class ="col-xs-6">
  <input name ="prod" type="text" required="required" class="form_control" id ="prod" placeholder ="Enter Product">
</div>
<div class ="col-xs-6 ">
<for ="prod" >
Remark
<div class ="col-xs-6">
  <input name ="prod" type="text" class="form_control" id ="prod" placeholder ="Enter Product" size="100" maxlength="500" readonly="readonly">
</div>
<div class ="col-xs-6 ">
<for ="prod" >
Ticket Status
<div class ="col-xs-6">
  <input type="radio" name="processing" id="processing" value="processing">
  <label for="radio">Processing
    <input type="radio" name="completed" id="completed" value="completed">
    Completed</label>
</div>
<div class ="col-xs-6 ">
<for ="prod" >
State
<div class ="col-xs-6">
  <select name="select" id="select">
    <option value="combobox">ComboBox</option>
    <option value="random">random</option>
  </select>
</div>
<input type="submit" name="submit" id="submit" value="ADD">
  </form>
</div>


	
</body>
</html>
