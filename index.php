<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php include 'connect.php' ?>
    <?php include 'nav.php'  ?>

    <h1 class="text-center text-primary my-3">Welcome to our store</h1>
    <h1 class="text-center text-success mb-4">Shop by Category</h1>


    <div class="container">
        <div class="row">

            <?php

                $sql= "select * from `clothes_table` ";
                $result = mysqli_query($con,$sql);
                if($result){
                    // $row = mysqli_fetch_assoc($result);
                    // echo $row['category_name'];

                    while ($row = mysqli_fetch_assoc($result)){
                        $id=$row['category_id'];
                        $name=$row['category_name'];
                        $desc=$row['category_desc'];
                        $price=$row['category_price'];
                        $image=$row['category_image'];


                        echo '<div class="col-md-4 col-sm-6 col-xm-12 mb-5">
                        <div class="card">
                            <img src='.$image.' class="card-img-top" alt=".$name." style="height:300px; object-fit:contain" >
                            <div class="card-body">
                                <h5 class="card-title">'.$name.'</h5>
                                <p class="card-text">'.substr($desc,0,65).'....</p>
                                <p>'.$price.'/-</p>
                                <a href="details.php?id='.$id.'" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                        </div>';

                    }

                }





?>













            




</body>
</html>
