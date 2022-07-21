<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>shope online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   



<center>
    
<DIV class="main">

<form action="insert.php" method="post" enctype="multipart/form-data">
    <h2> stor online </h2>
    <img src="photos/sto.png" alt="logo" width=550px id="photo" >
    <br>
     <input type="text" name="name" id="name1"  >
      <br>
      <input type="text" name="price" id="price"  >
      <br>
     <input type="file" value="chose file" name="image" id="file" style='display:none;' >
      <label for="file">upload image </label>
      <button name="upload">upload prodact</button>
      <br>
      <a href="products.php">show all prodact</a>
       
      
</form>

</DIV>


</center>




    
</body>
</html>