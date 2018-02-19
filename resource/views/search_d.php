
<?php

require_once('../templates/path.php');
require_once(DB);

require_once(FETCH.'/fetch_despatch.php');
include(TEMPLATE.'/header_2.php');

?>


  
 
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      
<
      <section id="main-content" style="background-color: white;" >
          <section class="wrapper">
             <div class="row">
                <div class="col-lg-9 main-chart">
               
                 <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">Last Added Dispatched file. <u>Serach Dispatched Letters</u><span style="float:right">Time: <?php echo $last_time; ?></span></div>
      <div class="collapsible-body"><span>Registry_number: <?php echo  $last_record["registry_no"]; ?>
        
      </span><span style='float:right'>Received_From: <?php echo $last_record["received_from"];?></span></div>
    </li></ul>

                    <form class="col s12" id="sform" method="POST">
                      <div class="row">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="company" name="company" type="text" class="validate">
                          <label for="company">Company Name</label>
                        </div> 
                        <div class="input-field col s6">
                          <i class="material-icons prefix">book</i>
                          <input id="volume_no" name="volume_no" type="number"  class="validate" value=<?php echo $data['volume'];?>>
                          <label for="volume_no">Volume</label>
                        </div>
                        <center>Date Range</center>
                      <div class="input-field col s6">
                          <div>From</div>
                          <input type="date" id="date_letter" name="From" class="validate" value="0">
                      </div>
                      <div class="input-field col s6">
                        <div>TO</div>
                        <input type="date" id="date_letter" name="To" class="validate" value="0">
                      </div>
                      <input type="hidden" name="page" value='despatched'>
                      <center> <button style="" id="insert" class="btn waves-effect waves-light" type="submit" name="insert">Search<i class="material-icons right">send</i></button></center>
                    </form>
                </div>
              </div>



      
                       <div>
                           <div id='search_msg'></div>
                       </div><!-- /content-panel -->

                       
            
               
              
                
                
            
              <div class="col-md-4 col-sm-4 mb">
              <!-- REVENUE PANEL -->
             
            </div><!-- /col-md-4 -->
          
            
            <div class="col-md-4 col-sm-4 mb">
              <!-- REVENUE PANEL -->
              
            </div><!-- /col-md-4 -->
            
          </div><!-- /row -->
                             
          
          
     


                  

                    
          

          <script src="js/search.js"></script>
          <script src="js/deld.js"></script>

      <?php include(TEMPLATE.'/footer_2.php') ?>

      <!--main content end-->
      <!--footer start-->
      