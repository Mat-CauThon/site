
   
<html>
   
<?php


  


require_once 'database.php';
require_once 'function.php';
       ?>
       
    <head>
    <meta charset="utf-8">
      <title> My Blog </title> 
     
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
      
      
      <link rel="stylesheet" href="css/web_style.css">
       
      </head>
    <body>
    
    
    <div id="header">

     
         <a id="logo" class="logo" href="blog.php" name="logo"><img src="images/logo.png">
           
        </a>
        
        
      <!--  
        <div id="search">
          
           <form method="POST" action="search.php" >
            <input type="search_type" id="search_type" name="search_type">
            <input type="submit" id="search_sum" name="search_sum" value="Поиск">
          
              
            
            </form>
        </div>
        -->
        
        
         <div id="add_new">
        <a href="create.php"><input type="button" id="add_but" name="add_but" value="Add new task"></a>
        
           
    </div>
    
    <div id="edit_old">
         <a href="edit.php"><input type="button" id="edit_but" name="edit_but" value="Edit"></a>
    </div>
    
       <div id="delete_p">
         <a href="delete.php"><input type="button" id="delete_but" name="delete_but" value="Delete"></a>
    </div>
        
         <div id="register">
         
    </div>
    
    </div>
    
    
   
    
   
    
<div class="container">
   <div class="row">
       <div class="col-md-9">
           <div class="page-header">
               <h1>All Tasks</h1>
              
         
    
               <h2><?php  $_REQUEST['login'] ?> </h2> 
                 </div>
           
           <?php 
           $posts = get_post();
          
    
           ?>
           
           
    <?php      foreach($posts as $post):  ?> 
    
                        <?php
    
    
        ?>
    
  <h1><?=$post['Title']?> </h1> 
    <p><?=$post['Content']?></p>
   
    <div>
       <span class="badge"><?=$post['Category']?></span>
    |  <span class="badge">Posted <?=$post['datetime']?> </span>
        
       
    
     </div>
      
  
         
        <hr>
        
        
        <?php endforeach; ?>
        
    </div>    
     
    
</div>
</div>
           
           

       
   
    

        
        
    
    </body>
</html>