

<html>
    <head>
        <script>
           
            
            
        
        </script>
        
    </head>
    
    <body>
      <img src="image/aa.jpeg" style="width:150 px; height:150px">  
      <hr>
      <form action="slide.php" method="post">
          <input type="submit" value="like" name="sub" >
      <a href="slide.php" >comment</a>
      </form>
      <hr>
    </body>
    
    
    
    
</html>







<?php
$ab=array();
$top=-1;
function push()
{
$top=$top+1;
$ab[$top]=$top+1;
echo$ab[$top];
}
if(isset($_POST['sub']))
{ 
    push();
}
?>