<?php
    require('databaseconnection.php');
    $message="";
    $firstnameerror=$lastnameerror= $emailerror=$doberror=$mnumerror=$designationerror=$gendererror="";
    $form_flag = TRUE;

   if (isset($_POST['save'])) {

    if(empty($_POST["firstname"])){
       $firstnameerror="firstname required";
       $form_flag = FALSE;
    }
    else{
	   $firstname=$_POST["firstname"];

    }
    if(empty($_POST["lastname"])){
       $lastnameerror="lastname required";
       $form_flag = FALSE;
    }
    else{
	   $lastname=$_POST["lastname"];
    }
    if(empty($_POST["email"])){
       $emailerror="email required";
       $form_flag = FALSE;
    }
    else{
      $email=$_POST["email"];
    }
     if(empty($_POST["dob"])){
       $doberror="date of birth required";
       $form_flag = FALSE;
    }
    else{
	   $dob=$_POST["dob"];
    }
     if(empty($_POST["mnum"])){
       $mnumerror="mobile number required";
       $form_flag = FALSE;
    }
    else{
	    $mnum=$_POST["mnum"];
    }
     if(empty($_POST["designation"])){
       $designationerror="designation  required";
       $form_flag = FALSE;
    }
    else{
	   $designation=$_POST["designation"];
    }
    if(empty($_POST["gender"])){
       $gendererror="gender required";
       $form_flag = FALSE;
    }
    else{
	  $gender=$_POST["gender"];
    }
	$hobies=$_POST["hobies"]??"";
	$hoby="";
    $message="";
	foreach($hobies as $hobi){
		$hoby.=$hobi;
	}
    if($form_flag){
	$sql="insert into userinfo(firstname,lastname,email,dob,mnum,designation,gender,hobies)values('$firstname','$lastname','$email','$dob','$mnum','$designation','$gender','$hoby')";
	if (mysqli_query($conn, $sql)) {
       $message="Record was saved";

 
    
    }
   }
 
}
	
?>
<!DOCTYPE>
<html>
<head>
  <title>User Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
           <a class="navbar-brand" href="#">UserPanel</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="adduser.php">AddUser</a></li>
          <li><a href="userinfo.php">UserInfo</a></li>
        </ul>
    </div>
</nav>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-5">
<?php echo $message ?>
<form method="POST" >
   <h2>AddUser</h2>
   <div class="form-group">
      <label> First Name</label>
	  <input type="text" class="form-control" name="firstname">
      <span class="error" style="color:red"><?php echo $firstnameerror;?></span>
   </div>
    <div class="form-group">
      <label> Last Name</label>
	  <input type="text" class="form-control" name="lastname">
      <span class="error" style="color:red"><?php echo $lastnameerror;?></span>
    </div>
	<div class="form-group">
      <label>Email</label>
	  <input type="email" class="form-control" name="email">
      <span class="error" style="color:red"><?php echo $emailerror;?></span>
    </div>
	<div class="form-group">
      <label>Date of Birth</label>
	  <input type="date" class="form-control" name="dob">
      <span class="error" style="color:red"><?php echo $doberror;?></span>
    </div>
	<div class="form-group">
      <label>Mobile No</label>
	  <input type="number" class="form-control" name="mnum">
      <span class="error" style="color:red"> <?php echo $mnumerror;?></span>
    </div>
	<div class="form-group">
      <label>Designation</label>
	  <input type="text" class="form-control" name="designation">
      <span class="error" style="color:red"><?php echo $designationerror;?></span>
    </div>
	<div class="form-group">
      <label>Gender   :</label>
	   Male:<input type="radio"  name="gender" value="Male">
	   Female<input type="radio"  name="gender" value="Female">
       <span class="error" style="color:red"><?php echo $gendererror;?></span>
    </div>
	<div class="form-group">
      <label>Hobbies  :</label>
	   Reading : <input type="checkbox"  name="hobies[]" value="Reading">
	   Dancing : <input type="checkbox"  name="hobies[]" value="Dancing ">
	   Playing : <input type="checkbox"  name="hobies[]" value="Playing">
	   Watching : <input type="checkbox"  name="hobies[]"  value=" Watching">
    </div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary"  name="save" value="Submit">
	</div>
</form>
</div>
</div>
</body>
</html>
