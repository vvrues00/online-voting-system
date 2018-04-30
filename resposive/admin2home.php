
<?php

require 'connect.php';
require'core.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title>abcd</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
                        <li class="active"> <a href="core2.php"> logout</a></li> 
                       
                        <li ><a href="reg1.php"> student registration</a></li> 
                        <li ><a href="candidate1.php"> candidate registration</a></li>
                        <li ><a href="show1.php"> database</a></li>
                        <li ><a href="delete1.php"> edit db</a></li>
                        
           </nav>
            
        </header>   
        <div class="maincontent">
            
         <div class="content">
             <article class="arti"> 
                 <header>
                     <h2> <a href="">voting</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">a way to revolution</p></footer>
                 <content>    
                
                         
                         Over 1000 organizations from 48 countries
                         rely on Simply Voting for their election needs.
                         Our secure protocols, ease-of-use and flexible 
                         solutions transform elections across industries. 
                         Get in touch with us to learn how we can run your next 
                         election together
              
                 </content>  
             </article>
             <article class="arti2">
                 <header>
                     <h2> <a href="">make it online</a></h2> 
                 </header>   
                 
                 <footer><p class="p-info">the world is moving</p></footer>
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
            <h2> vote info</h2>
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
       
    </body>
</html>
<?php

if(isset($_SESSION['user'])&&!empty($_SESSION['user']))
{
    
 
}
 else {
    
    header('location:adminlogin.php');
     
 }
?>