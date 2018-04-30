

<?php session_start();
 ob_start();
?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title>abcd</title>
        <link rel="stylesheet" type="text/css" href="style.css">
   <script language="javascript">
    <!--
    function validate()
    {
     alert("submitted");   
     
 }
   //-->
    </script>
    </head>
    <body class="body">
        <header class="mainheader">
            <img src="image/cucek.jpg">
            <aside class="word">
                <article>
                    <content>
                COCHIN UNIVERSITY COLLEGE
                      OF ENGINEERING 
                        KUTTANNAD
                         
                        
                        
                    </content>    
                    
                    
                    
                </article>   
                
                
                
            </aside>
            <nav>
                    <ul>
                        <li class="active"> <a href="admin2home.php"> home</a></li> 
                        <li ><a href="a"> content</a></li> 
                       
                        <li ><a href="a"> contact</a></li> 
                        
                    </ul>
           </nav>
            
        </header>   
        <div class="maincontent">
            
         <div class="content">
             <article class="arti"> 
                 <header>
                     <h2> <a href="">first article</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">this is placed</p></footer>
                 <content>    
                     <form action="candidate.php" method="POST" enctype="multipart/form-data">
         <table>
             <tr>
                 <td>
                    
                     <label> name:</br> <input type="text" name="name" id="we" placeholder="name" required="required"></label></br>  
                 </td>
             </tr>  
             <tr>
                 <td>
                     
                     <label> registration number</br><input type="number"  name="reg" id="we" placeholder="e.g:121160231" required="required" max="99999999"/></label>   
                     
                     
                 </td>   
                 
             </tr>
             <tr>
                 <td>
                     <label>email id</br><input type="email" name="email" placeholder="e.g:vrules@gmail.com" required='required' id="we"></label>
                 </td>
             </tr>
             <tr>
                 <td>
                     <label>date of birth</br><input type="date" name="dob" id="we" required='required' ></label>
                 </td>
             </tr>
             <tr>
                 <td>
                     <label>
                          branch</br>
                     </label>    <select id="we" name="branch">
                        
                         
                         <option>mechanical engineering</option>
                         <option>civil engineering </option>
                         <option>electronic's and communication</option>
                         <option>computer science and engineering</option>
                         <option> information technology</option>
                         <option>electrical and electronics engineeing</option>
                         <option>master of computer application</option>
                     </select></br></br>
                 </td>
             </tr>
             
             <tr>
                 <td>
                     <label>male <input type='radio' name='gender' value="m"></label>  
                     
                
                     <label>female<input type="radio" name="gender" value="f"></label>
                                   
                 </td>
             </tr>
             <tr>
                 <td>
                     
                     <label>semester<br><input type="text" name="sem" required="required" id="we"></label>
                     
                 </td>
                 
                 
             </tr>
             <tr>
                 <td>
                     choose symbol
                     <br> <input type="file" name="cat" required="required" id="we1" placeholder="choose symbol">

                     
                     
                 </td>
                 
                 
             </tr>
                  <tr>
                <td>
                   </br><input type="submit" name='bla' value="submit">
                     &nbsp;&nbsp;
                     <input type="reset" value="reset"> 
                 </td>
             </tr>
          </table>        
      </form>        
                        
                 </content>  
             </article>
             <article class="arti2">
                 <header>
                     <h2> <a href="">second article</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">this is placed</p></footer>
                 <content>    
                
                         
                         Over 1000 organizations from 48 countries
                         rely on Simply Voting for their election needs.
                         Our secure protocols, ease-of-use and flexible 
                         solutions transform elections across industries. 
                         Get in touch with us to learn how we can run your next 
                         election together
                    
                 </content>  
               </article>
         </div>
        </div>
        <aside class="top-siderbar">
            <article>
            <h2> top sidebar</h2>
            <p>
                Over 1000 organizations from 48 countries
                rely on Simply Voting for their election needs.
                Our secure protocols, ease-of-use and flexible
                solutions transform elections across industries. 
                Get in touch with us to learn how we can run your 
                next election together
            </p>
            </article>
        </aside>
        <footer class="mainfooter">all rights &copy; reserved to me</footer>
       
   

    </body></html>
<?php


if(isset($_SESSION['user']))
{
$user='root';
$pass='';
$db='registration';
$data=new mysqli('localhost',$user,$pass,$db) ;

//if(isset($_SESSION['username'])&&!empty($_SESSION['usernmae']))
//{
if($data)
{
    if(isset($_POST['bla'])&&isset($_POST['name']))
        if(!empty('name')){
    {$name1=  mysqli_real_escape_string($data,$_POST["name"]);
$reg1=  mysqli_real_escape_string($data,$_POST["reg"]);
$email1=  mysqli_real_escape_string($data,$_POST["email"]);
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$branch=$_POST["branch"];
$sem=$_POST["sem"];
$name=  htmlentities($name1);
$reg=  htmlentities($reg1);
$email=  htmlentities($email1);
 $name2=$_FILES['cat']['name'];
 $cat=$_FILES['cat']['tmp_name'];
     $img='image/';
     echo $gate=$img.$name2;
$query="insert into `candidate`(`name`,`regno`,`email`,`branch`,`gender`,`dob`,`sem`,`image`) values('$name','$reg','$email','$branch','$gender.','$dob','$sem','$name2')";
$result= mysqli_query($data,$query);
if($result)
{if(move_uploaded_file($cat, $gate))
    {         
  echo'<script>alert("executed");</script>';
    }
    else'<script>alert("error");</script>';
    }
    
        }}
  else
      die();


}
else
{
    echo "<script>alert('sql error');</script>";
}
}
else {
    header('location:adminlogin.php');
}



  

//}  else {
// header('Location:adminlogin.php');   
//}
?>



