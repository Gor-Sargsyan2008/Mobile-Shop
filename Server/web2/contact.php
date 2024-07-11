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

     <div class="content">
        <div class="dzax">
          <h1 class="vernagir">Registration form</h1>
        <form>
          
          <div >
            <input class="text" type="text" placeholder="Name">
          </div>
          <div >
            <input class="text" type="password" placeholder="password">
          </div>
          <div >
            <input class="text" type="number" placeholder="number">
          </div>
          <div >
            <input class="text" type="date">
          </div>
          <div >
            <input class="text" type="email" placeholder="enter your --email">
          </div>
          <div>
           <label>Prog</label>
            <input  type="checkbox" name="workshop">
           <label>Web</label>
            <input  type="checkbox" name="workshop">
          </div>
          <div >
           <label>Male</label>
            <input  type="radio" name="gender">
           <label>Female</label>
            <input  type="radio" name="gender">
          </div>
          
           
          
          <div>
           <select name="" id="">
            <option value="">Armenia</option>
            <option value="">France</option>
            <option value="">Germany</option>
           </select>
          </div>
          <div >
            <textarea></textarea>
          </div>
          <div>
            <input class="text" type="submit" value="Submit">
          </div>


        </form>
        


        </div>
        
        
        <div class="aj">
          <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.5636996327235!2d44.477403712116384!3d40.196522168892876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd719b57919b%3A0x6f5b51aee4e64196!2sTUMO%20Center%20for%20Creative%20Technologies!5e0!3m2!1sen!2sam!4v1697977867955!5m2!1sen!2sam"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
  
        </div>
     </div>

     <?php
   include('partials/footer.php');
?>
      
    </div>



  </body>
</html>