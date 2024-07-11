<?php 

$link = mysqli_connect("localhost", "root", "root", "Gor8sargsyan");
$sql = "SELECT * FROM products";
$result = mysqli_query($link,$sql);
$r = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($link);


 ?>



<!DOCTYPE html>
<html>
  <head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="main">
        <?php  
        include('partials/header.php');
      ?> 

  <div class="shop">
    <?php 
       foreach ($result as $key => $value) { ?>


         <div class="product">
      <img class="product_image" src="<?php echo $value['image'] ?>" alt="Case">
      <h4 class="product_title"><?php echo $value['name'] ?> </h4>
      <p class="product_price"><?php echo $value['price'] ?></p>
      <a class="product_link" href="single.php?id=<?php echo $value['id'] ?>">About us</a>
    </div>



       <?php } ?>

     
    
  
</div>
    <?php 
      include('partials/footer.php');
    ?>
      
  </div>
  </body>
</html>