<?php
session_start();
if(!isset($_SESSION['userid'])){
  header('location:lock_screen.php');
$name = $_SESSION['userid'];
}
include('resource/templates/header.php');
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
                      <a href="resource/views/received.php">
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>Add Received</h5>
                      			</div>
                      			<div class="row">
									<div>
										<p>Add new file</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
								<div class="centered">
                            		<i class="fa fa-plus-circle  icon-large" aria-hidden="true"></i>
										
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	</a>
                        <a href="resource/views/despatched.php">
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>Add Dispatch</h5>
                      			</div>
								<div class="row">
									<div>
										<p>Add new file</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
                            <i class="fa fa-plus-circle  icon-large" aria-hidden="true"></i>
										
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                        </a>
              <a href='resource/views/search_r.php'  >      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>Saved Registries <i class="fa fa-check-circle-o fa-70x" style="color:green"></i></h5>
								</div>
							
								
								<div class="row">
									
									
								</div>
							</div>
              </a>
						</div><!-- /col-md-4 -->
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						
						
						  
					
						
						
					</div><!-- /row -->
					
					        
                  
              </div><! --/row -->
          </section>
      </section>


      <?php include('resource/templates/footer.php') ?>

      <!--main content end-->
      <!--footer start-->
     