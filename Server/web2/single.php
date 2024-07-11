<?php 
    $id = $_GET['id'];


    $product =array();
    $link = mysqli_connect("localhost", "root", "root", "Gor8sargsyan");
    $sql = "SELECT * FROM `products` WHERE `id` = $id";
    $result = mysqli_query($link,$sql);
    $r = mysqli_fetch_assoc($result);
    $product = $r;
    mysqli_close($link);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 <div class="main">
      <?php  
        include('partials/header.php');
      ?> 
       <h1 class="single"><?php echo $product['name']?></h1>
       <div class="content"> 
       	
      
   
        <div class="dzax">
           <img height="500" width="415" src="<?php echo $product['image']?>" alt="nkar1" >
        </div>
        <div class="aj">

<p><?php echo $product['info']?></p>
<p><?php echo $product['price']?></p>
</div>

</div>

<?php
   include('partials/footer.php');
?>
      
    </div>
 </body>
 </html>