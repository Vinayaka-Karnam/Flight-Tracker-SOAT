<?php
  $str= $_POST['postdata'];
  //$sr="sh ./message.sh ".$str;
  $output = shell_exec("sh ./message.sh"." ".$str) ;
  //echo $output;
  echo "message sent";
?> 