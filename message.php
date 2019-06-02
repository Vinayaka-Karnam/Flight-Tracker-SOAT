<html>
    <head>
      <link rel="stylesheet" href="flight1.css">
        <body>
          <div id="background">
                    <img src="cloud.jpg" class="stretch" alt="" />
                </div>
<?php

$str= $_POST['post1data'];
//$sr="sh ./message.sh ".$str;
$output = shell_exec("sh ./message.sh"." ".$str) ;
//echo $output;
echo "<h3>Message Succesfully Sent!!<h3>";
echo"<br>";
echo "<h1>".$str."</h1>";

?>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element');
}

</script>



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </body>
    </head>
</html>
