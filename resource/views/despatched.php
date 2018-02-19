<?php

require_once('../templates/path.php');
include(TEMPLATE.'/header_2.php');
require_once(DB);
require_once(FETCH.'/fetch_despatch.php');

 


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
                     <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">Last Added Dispatch file<span style="float:right">Time: <?php echo $last_time; ?></span></div>
      <div class="collapsible-body"><span>Registry_number: <?php echo  $last_record["registry_no"]; ?>
        
      </span><span style='float:right'>Received_From: <?php echo $last_record["received_from"];?></span></div>
    </li></ul>

                    <div id="error_msg"></div>
      <div class="row">
    <form class="col s12" id="rform" method="POST">
      <div class="row">
      <div class="input-field col s3">
          <i class="material-icons prefix">dialpad</i>
          <input id="reg_no" name="reg_no" type="number" class="validate" value=<?php echo $reg_num; ?>>
          <label for="reg_mo">Registry Number</label>
        </div> 
         <div class="input-field col s3">
          <i class="material-icons prefix">book</i>
          <input id="volume_no" name="volume_no" type="number" class="validate" value=<?php echo $data['volume']; ?>>
          <label for="volume_no">Volume</label>
        </div> 
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="rec_from" name="rec_from" type="text" class="validate">
          <label for="rec_from">Received From</label>
        </div>
         <div class="input-field col s6">
          <i class="material-icons prefix">calender</i>
           <div>Date of letter</div>
          <input type="date" id="date_letter" name="date_letter" class="validate">
         
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">info</i>
          <input id="remark" name="remark" type="text" class="validate">
          <label for="remark">Remark</label>
        </div>
      </div>
       <div class="row">
          <div class="input-field col s12">
          
           <i class="material-icons prefix">note</i>
            <textarea id="Subject" name="subject" class="materialize-textarea" data-length="120"></textarea>
            <label for="subject">Subject</label>
          </div>
        </div>
        <input type='hidden' name='page_name' value='despatched'>
              
         <button style="float: right;" id="insert" class="btn waves-effect waves-light" type="submit" name="insert">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
   


        

                    

					
				
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>ADD DESPATCHED REGISTRY</h3>

                                        
                      <!-- First Action -->
                      <div class="desc">
                      	
                          <h4>Current Volume :<span class='new badge red'> <?php echo $data['volume'];?></span></h4>
                        
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

<script  src="js/insert.js"></script>
      <?php include(TEMPLATE.'/footer_2.php') ?>

      <!--main content end-->
      <!--footer start-->
     
      </body>
</html>
