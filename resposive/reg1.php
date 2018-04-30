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
     
     
 }
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
                     <h2> <a href="">election</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">voting portal</p></footer>
                 <content>    
                     <form action="reg.php" method="POST">
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
                 
             </tr><tr>
                 <td>
                     
                     <label> semester</br><input type="number"  name="sem" id="we" placeholder="1 to 8" required="required" max="99999999"/></label>   
                     
                     
                 </td>   
                 
             </tr>
             
             <tr>
                 <td>
                     <label>email id</br><input type="email" name="email" placeholder="e.g:vrules@gmail.com" id="we" required="required"></label>
                 </td>
             </tr>
             <tr>
                 <td>
                     <label>date of birth</br><input type="date" name="dob" id="we" required="required"></label>
                 </td>
             </tr>
             <tr>
                 <td>
                     <label>
                          branch</br>
                     </label>    <select id="we" name="branch" required="required">
                        
                         
                         <option>mechanical engineering</option>
                         <option>civil engineering </option>
                         <option>electronics and communication</option>
                         <option>computer science and engineering</option>
                         <option> information technology</option>
                         <option>electrical and electronics engineering</option>
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
               <  <td>
                   </br><input type="submit" value="submit">
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
            <h2> voting</h2>
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
    if(isset($_POST["name"])&& isset($_POST["reg"])&& isset($_POST["email"])&& isset($_POST["dob"])&& isset($_POST["gender"])&& isset($_POST["branch"])&&isset($_POST["sem"]))
    {$name1=  mysqli_real_escape_string($data,$_POST["name"]);
$reg1=  mysqli_real_escape_string($data,$_POST["reg"]);
$email1=  mysqli_real_escape_string($data,$_POST["email"]);
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$branch=$_POST["branch"];
$sem=$_POST['sem'];
$name=  htmlentities($name1);
$wer=  str_shuffle($name);
$reg=  htmlentities($reg1);
$email2=  htmlentities($email1);
$email= $email2;
$query="insert into details(name,reg_no,ema,branch,gender,dob,sem,pass) values('$name','$reg','$email','$branch','$gender.','$dob','$sem','$wer')";
$result= mysqli_query($data,$query);
if($result)
{
   $query2="select `ema` from `details` where `reg_no`='$reg'";
   $result2=  mysqli_query($data,$query2);
    echo '<script>alert("executed");</script>';

    



}
else
{die("not workng");}
    }
}
 
}
else {
    header('Location:adminlogin.php');   
}
?>