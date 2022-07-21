<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<?php
include('config.php');
$ID=$_GET['id'];
$up = mysqli_query($con, "select * from prod where id =$ID");
$data = mysqli_fetch_array($up);


?>


<center>
    
<DIV class="main">

<form action="up.php" method="post" enctype="multipart/form-data">
    <h2> update prodect </h2>
    <img src="photos/update1.png" alt="logo" width=500px id="photo" >
    <br>
    <input type="text" name="id"  value='<?php echo $data['id'] ?>'  >
      <br>
     <input type="text" name="name" id="name1" value='<?php echo $data['name'] ?>' >
      <br>
      <input type="text" name="price" id="price" value='<?php echo $data['price'] ?>' >
      <br>
     <input type="file" value="chose file" name="image" id="file" style='display:none;' >
      <label for="file">upload update image </label>
      <button name="update" type='submit' >update prodact</button>
      <br>
      <a href="products.php">show all prodact</a>
       
      
</form>

</DIV>


</center>




    
</body>
</html>