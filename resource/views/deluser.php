<?php




require_once('../templates/path.php');
 $admin = $_SESSION['admin'];
 
if($admin != 1){
 header('location:../../index.php');
}

require_once(CONFIG.'/functions/success_handling.php');
include(TEMPLATE.'/header_2.php');
require_once(DB);


?>
   
  
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

               <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                    
                  
                      
                      <div class="row mt">
                    <!-- Add recieved registry -->
                        
                        <div class="col-md-4 col-sm-4 mb">
                          
                        </div><!-- /col-md-4 -->
                    </div><!-- /row -->
                     

                    <div id="msg"></div>
      <div class="row">
   
     
            <h2 class="form-login-heading">Delete User</h2>
            <div class="login-wrap">
                
               <?php 
               $data = $db->connect();
               $result=$data->query("SELECT * from users");
               start_user();
               if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc())
                {
                  $userid =  $row['userid'];
                  $username = $row['username'];
                  fetch_userS($userid,$username);
                }
                seal();
               }
               ?>
                <br>
                 
  <br>
                
              </div>
              
              
                
              
    
            
             
    
             
  </div>
   
  <!-- Switch -->
 

        

                    

					
				
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                 
              </div><! --/row -->
          </section>
      </section>

<script  src="js/delu.js"></script>
      <?php include(TEMPLATE.'/footer_2.php') ?>

      <!--main content end-->
      <!--footer start-->
     
      </body>
</html>
