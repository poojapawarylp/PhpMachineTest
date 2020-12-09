<?php
require('databaseconnection.php');
$sql="select * from userinfo";
$result=mysqli_query($conn,$sql);
?>
<html>
<head>
  <title>User Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
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
<div class="col-md-1">
</div>
<div class="col-md-10">
   <table id="table_id" class="table table-striped table-bordered" style="width:100%">
       <thead class="thead-dark">
       <tr>
       <th>Firstname</th>
       <th>LastName</th>
       <th>Email</th>
       <th>Date of birth</th>
       <th>Mobile number</th>
       <th>Designation</th>
       <th>Gender</th>
       <th>Hobies</th>
       </tr>
       </thead>
         <?php   
                while($row=$result->fetch_assoc()) 
                { 
             ?> 
         <tr>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['mnum'];?></td>
            <td><?php echo $row['designation'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['hobies'];?></td>
           </tr> 
        <?php
        }?>
   </table>
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</body>
</html>

