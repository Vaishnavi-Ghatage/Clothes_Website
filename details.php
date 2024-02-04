<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include './partials/connect.php' ?>
    <?php include './partials/nav.php'  ?>

<?php

    $id=$_GET['id'];
    $sql = "select * from `clothes_table` where category_id=$id";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $id=$row['category_id'];
    $name=$row['category_name'];
    $desc=$row['category_desc'];
    $price=$row['category_price'];
    $image=$row['category_image'];


    ?>
        <div class="container-fluid py-5">
          <h1 class="display-4 fw-bold text-center"><?php echo $name   ?></h1>
          <p class="col-md-12 fs-6"><?php echo $desc   ?></p>
          
          <a href="index.php" class="btn btn-primary"><button class="btn btn-primary btn-lg" 
          type="button">Continue Shopping</button></a>
        </div>
      
      <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <img src="<?php echo $image ?>" alt="dress"  style="height:400px">
                </div>

                <div class="col-lg-6 col-sm-12">
                    <h2 class="text-center text-danger" >
                        <?php  echo $name ?>
</h2>

<p class="text-center">
                        <?php  echo $desc ?>
</p>

<p class="text-center">
    <strong >Price:</strong> <?php  echo $price ?>                   
</p>

<button class="btn btn-primary">
Add to cart
</button>

                </div>
            </div>

      </div>




</body>
</html>