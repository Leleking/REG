<?php

function get_values($a,$b,$c,$d,$e,$f,$g,$h){
  $result = array();
  $result = array_push($result,$a,$b,$c,$d,$e,$f,$g,$h);
  return $result;


}
function start(){
  echo '
       <div>
                          <table class="table table-condensed">
                            <div class="input-field col s12">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Registry_num</th>
                                  <th><i class="fa fa-bookmark"></i> Date</th>
                                  <th><i class=" fa fa-edit"></i>  Received By</th>
                                  <th><i class=" fa fa-calender"></i>  Date on Letter</th>
                                  <th> <center><i class=" fa fa-info"></i> Subject</center></th>
                                  <th style="max-width: 50px;" ><i class=" fa fa-edit"></i>  Remark</th>
                                  <th><i class=" fa fa-book"></i>  Volume</th>
                                  <th><i class=" fa fa-edit"></i>  Edit</th>
                              </tr>
                              </thead>
                              <tbody>
    ';
}
function seal(){
  echo '
     </tbody>
                          </table>
                       </div>
                       </div><!-- /content-panel -->
    ';
}


function fetch_result($a,$b,$c,$d,$e,$f,$g,$h,$i,$j){
  $c = strtotime($c);
$c = date("D - dS M Y g:i A", $c);
 $e = strtotime($e);
$e = date("D - dS M Y ", $e);
  echo "
      <tr>
                                  <td><a href='basic_table.html#'></a>$a</td>
                                  <td class='hidden-phone'>$b</td>
                                  <td>$c</td>
                                  <td>$d</td>
                                  <td>$e</td>
                                  <td>$f</td>
                                  <td>$g</td>
                                  <td><span class='label label-info label-mini'>$h</span></td>
                                  ";
                                  if($d == $i)
                                  {
                                    echo "
                                  <td>
                                  <a id='delsearch' reg='$j' class='waves-effect waves-light btn'>Delete</a>
                                  </td>
                              </tr>
                              ";
                            }else 
                            {
                              echo '
                              <td>
                              <a class="btn disabled">Delete</a>
                              </td>
                              </tr>'
                              ;
                            }
                              
}
function start_user(){
  echo '
       <div>
                          <table class="table table-condensed">
                            <div class="input-field col s12">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i>Userid</th>
                                  
                                  <th> <center><i class=" fa fa-info"></i>Username</center></th>
                                 
                                  <th><i class=" fa fa-edit"></i> Del</th>
                              </tr>
                              </thead>
                              <tbody>
    ';

}
function fetch_users($a,$b){
   echo "
      <tr>
                                 
                                  <td>$a</td>
                                  <td>$b</td>
                                 <td>
                                  <a id='del' userid='$a' class='waves-effect waves-light btn'>Delete</a>
                                  </td>
                              </tr>
                              ";
}

