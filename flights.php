<html>
    <head>
        <body>
<?php
$con=mysqli_connect("sql12.freesqldatabase.com","sql12294053","mY38bKATA4","sql12294053");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_REQUEST["flightnumber"];
$flightnumber=mt_rand(1,2);

$result = mysqli_query($con,"SELECT * FROM FLIGHTS WHERE ID='".$flightnumber."'");


while($row = mysqli_fetch_array($result))
{
  

$flightlocation=$row['LOCATION'];

}
echo "</table>";
$str= "Your flight with flight number ".$id." is at ".$flightlocation;
echo $str;
$_POST["postdata"] = $str;
mysqli_close($con);
?>
<form method="post" action="message.php" id="senddata">
      <input type="Submit" name="postdata" value="Send sms <?php print_r($str); ?>">  
</form> 
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