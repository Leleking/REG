<?php
$max_volume = $db->select_assoc("select max(Volume) as vol from registry_d");
$volume = $max_volume['vol'];

$data = $db->select_assoc("select max(registry_no) as num,max(Volume) as volume from registry_d where Volume = $volume");

$reg_num = $data['num'] + 1;
$last_record = $db->select_assoc('select * from registry_d order by id desc limit 1');
$last_time = strtotime($last_record['date_r']);
$last_time = date("D - dS M Y g:i A", $last_time);



?> 