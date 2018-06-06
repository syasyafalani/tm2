<? php
	
$link = mysql_connect('localhost', 'mvc', '1234');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';...
	
	
	
?>
