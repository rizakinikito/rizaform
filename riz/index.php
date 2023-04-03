<?php
$title = 'Index';
require_once 'includes/header.php';
?>
<!--
    -First name
    -Last name
    -Date of Birth (Use DatePicker)
    -Specialty (Database Admin, Software Developer, Web Administrator)
    -Email Address
    -Contact
-->
<div class="bg 1.jpg" ></div>

<h1 class="text-center">Registration For IT Conference </h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last name</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Lastname with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contact Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your contact number with anyone else.</small>
  </div>

  
<head>
   <div class="form-group">
    <label for="bdaymonth"> Date of Birth</label>
    <input type ="date" id="bdaydate" name="bdaydate">
</div>
         
</body>
</html><div class="form-group">    
<label for="exampleInputSpecialty1">Specialty:</label>   
<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Database Admin</label>  
</div>  

<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Software Developer</label>
</div>  

<div class="form-group form-check">    
<input type="checkbox" class="form-check-input" id="exampleCheck1">    
<label class="form-check-label" for="exampleCheck1">Web Administrator</label>
</div>
</select>
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <div class="form-group">
  <label for="submit" class="btn-primary btn-block">Submit</label>
  
</form>