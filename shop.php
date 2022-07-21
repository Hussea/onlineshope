<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>all-products</title>
    <link rel="stylesheet" href="style.css">

    <style>
        h3{
            font-weight:bold;
        }
        .card{
            float:right;
            margin-top:20px;
            margin-left:10px;
            margin-right:10px;
        }
        .card img{
            width:100%;
            height:200px;
        }
        main{
            width:60%;
        }
        #aa
        {
            margin-left:70px;
            text-decoration:none;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="aa" class="navbar-brand" href="card.php">Mycard</a>
    </nav>
<center>
<h3> المنتجات المتوفره </h3>
</center>

<?php
 include('config.php');
 $result = mysqli_query($con , "SELECT * FROM prod");
 while($row=mysqli_fetch_array($result))
 {
        echo "
        <center>
                <main>
                    <div class='card' style='width: 15rem;'>
                        <img src='$row[image] ' class='card-img-top'  >
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[price]</p>
                            
                            <a href='val.php? id=$row[id]' class='btn btn-success'> اضافه المنتج للعربه</a>
                        </div>
                    </div>
                </main>
            <center>
        
        ";
            
           
 };
?>





</body>
</html>