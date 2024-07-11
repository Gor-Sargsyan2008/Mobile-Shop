<?php
 

    if (isset($_POST['add_product'])) {
  	  $title = $_POST['name'];
  	  $price = $_POST['price'];
  	  $image = $_POST['image'];
  	  $info = $_POST['info'];
  

    
     //kap bazayi het
     $db = mysqli_connect('localhost', 'root', 'root', 'Gor8sargsyan');

     if (!$db) {
	  echo "DB ERROR";
     }else{
      //stexcel harcum
	    $query = "INSERT INTO `products` (`name`, `price`, `image`,`info`)   VALUE ('$title', '$price', '$image', '$info')";
      //uxarkel harcumy bazain, stanal patasxan
	 $response = mysqli_query($db, $query);
	 if ($response == true) {
		echo 'apranq@ avelacvec';
	 }else {
		echo 'QUERY ERROR';
	 }

	 //kapy xzel
	 mysqli_close($db);

    }
}

?>






<!DOCTYPE html>
<html>
<head>

	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php  
        include('partials/header.php');
      ?>
      <div class="content">
   <div class="dzax">  
  <form  method='post'>
  	
  	<input  class="text" type="text" name="name" placeholder="Name" ><br>
    
   
  	<input  class="text" type="number" name="price" placeholder="Price"><br>
    
   
  	<input class="text" type="text" name="image" placeholder="Image"><br>
   
  	
  	<textarea class="text" name="info" placeholder="Info"></textarea><br>

  	<input class="submit" type="submit" name="add_product">
  </form>
  </div> 

<?php 

$link = mysqli_connect("localhost", "root", "root", "Gor8sargsyan");
$sql = "SELECT * FROM products";
$result = mysqli_query($link,$sql);
$r = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_close($link);


 ?>
 <div class="aj">
<table class="table1" border="1">
  <?php foreach ($r as $key => $value) { ?>
     <tr class="table1" >
       <td class="table1" ><?php echo $value['id'] ?></td>
       <td class="table1"><?php echo $value['name'] ?></td>
       <td class="table1"><?php echo $value['price'] ?></td>
       <td class="table1"><?php echo $value['image'] ?></td>
       <td class="table1"><?php echo $value['info'] ?></td>
       <td class="table1">
         <a href="#">Update</a>
        <a href="#">Delete</a>
       </td>
     </tr>

  <?php } ?>

</table>
</div>
</div>


<?php 
      include('partials/footer.php');
    ?>
</body>
</html>