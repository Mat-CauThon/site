
   <html>

   
<?php
require_once 'database.php';
require_once 'function.php';
       ?>
       
    <head>
    <meta charset="utf-8">
      <title> My Blog </title> 
     <style>  </style>
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
            <input type="search_type" id="search_type" name="search_type">
            <input type="submit" id="search_sum" name="search_sum" value="Поиск">
        </div>
        -->
        
    </div>
    
    
    
   <div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Delete post</h1>
    		
    		<form name="forma "action="delete.php" method="POST">
    		    
    		    
    		    
    		    <div class="form-group">
    		        <label for="Title">Title <span class="Title">*</span></label>
    		        <input type="text" class="form-control" name="Title"  />
    		         
    		    </div>
    		    
    		   
    		    
    		    
    		    <div class="form-group">
                   
    		        <button  type="submit" class="btn btn-primary" name="send">
    		            DELETE
    		        </button>
    		        
    		        <button formaction="blog.php" class="btn btn-default">
    		            Cancel
    		        </button> 
    		    </div>
    		    
    		   
               
               
                <?php
                
                  if( isset($_POST{'send'}) )
                  {
    		          
                          
               
                      mysqli_query($link, "DELETE FROM `posts` WHERE `posts`.`Title` = '$_POST[Title]'");
            
                      
    		       echo    '<h2><font color="Red">Task Deleted</font></h2>';
    		     
                  }
                  
                
                
    		  ?>
    		  
    		      
    		      
    		      
    		</form>
    		
    		
    		

           
    		
		</div>
		
	</div>
</div>
    
   
    

        
        
    
    </body>
</html>