<?php
session_start();
require 'connect.php';
if(isset($_POST['fan']))
{
    echo'<script>alert("voted sucessfully!");</script>';
   // session_destroy();
       // echo'<script>window.location="index.php";</script>';

   $prin=$_POST['fan'];
   $result="select `votes` from `candidate` where `regno`='$prin'";
  $ad= mysqli_query($data, $result);
   if($ad){
       
       while( $row=  mysqli_fetch_array($ad, MYSQLI_ASSOC))
       {
           
           $a=$row['votes'];
           
           
           
           
       }
       
       
       
        $b=$a+1;
        $qr="update `candidate` set `votes`='$b' where regno='$prin'";
        
        $aa=  mysqli_query($data, $qr);     
   
        if($aa)
        {
            $a=$_SESSION['id'];
            $reser="update `details` set `verified`=1 where `id`='$a'";
            mysqli_query($data, $reser);
           if($a)
           {
               include 'ses.php';
           
           echo "<script>window.location='index.php'</script>";
           }
 else {
     
 }
           
           }
 else {
     die("dff");
 }
        
        
       }
}
 else {
    
}

