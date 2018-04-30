
<html>
    <head></head>
    <body> 
<form action="image.php" method="post" enctype="multipart/form-data">
    
    <input type="file" name="cat" required="required">
    <input type="submit" name="mat" value="submit"></br></br>    
    <input type="text" name="jak" value="write something">
    
    
    
</form>
        <div> <?php
        include 'connect.php';
          // $query='insert into candidate(`image`) values("'.$name.'")';
             
  
  //if(mysqli_query($data, $query))
  //{   
      //echo $img.$name;   
      $query1="select `image` from `candidate`";
     if( mysqli_query($data, $query1))
     {         $god=mysqli_query($data,$query1);
         while($asd=mysqli_fetch_array($god,MYSQLI_ASSOC))
         {
             $qwe=$asd['image'];
         
                if($qwe)
                {        
                 echo $qwe.'<br>';
                echo'<div ><img src="image/'.$qwe.'"'.'style="width:20%;height:20%;"/>'.'<textarea>'.'</textarea></div>';
    
  }}} ?></div>        
    </body>
</html>
<?php
include 'connect.php';
if(isset($_POST["mat"]))
{
    $twe=$_POST['jak'];
   $name=$_FILES['cat']['name'];
  $cat=$_FILES['cat']['tmp_name'];
     $img='image/';
     echo$gate=$img.$name;
     
     $query='insert into candidate(`image`) values("'.$name.'")';
     if(mysqli_query($data, $query))
     {      
    if(move_uploaded_file($cat, $gate))
    {         
  echo'uploaded';
     }}
  else
      die();
    
    
    }    

    ?>