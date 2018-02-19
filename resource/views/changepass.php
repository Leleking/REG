<?php

require_once('../templates/path.php');
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
                     

                    <div id="error_msg"></div>
      <div class="row">
   
     <form id="aform" method="POST">
            <h2 class="form-login-heading">Change Password</h2>
            <div class="login-wrap">
                <div class="input-field col s3">
          
          <input id="pass_old" name="pass_old" type="password" class="form-control" placeholder="Old Password">
          
        </div> 
         <div class="input-field col s3">
         
          <input id="pass_new" name="pass_new" type="password" class="form-control" placeholder="New Password">
          
        </div> 
        <div class="input-field col s3">
         
          <input type="password" class="form-control" placeholder="Confirm Password" name="confirm" autofocus>
          
        </div> 
               
                <br>
                
             <br>
                <input id='submit' class="btn btn-theme btn-block" value="CHANGE PASSWORD" type="submit" name='submit'/>
                <hr>
              </div>
              
              
                
              
    
            
             
    
          </form>     
  </div>
   
  <!-- Switch -->
 

        

                    

					
				
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>ADD NewUser </h3>

                                        
                      <!-- First Action -->
                      <div class="desc">
                      	
                          Please note that changing your password would render your old password inactive. You also need your old password to be able to change your password.
                        
                      </div>
                      <!-- Second Action -->

                     

                       <!-- USERS ONLINE SECTION -->
					
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

<script  src="js/changepass.js"></script>
      <?php include(TEMPLATE.'/footer_2.php') ?>

      <!--main content end-->
      <!--footer start-->
     
      </body>
</html>
