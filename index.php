<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>

<?php

try{
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
$mystring = "Hello IBM COS World!";
// Initialize variables
$ENDPOINT = 's3-api.us-geo.objectstorage.softlayer.net';
$ACCESSKEY = 'VfAY8vRGl6LvV4XjZaM7';
$SECRETKEY = 'C6lhiZo1U32iHykYrTCa7SDRP9BUtesLzd7RVdBQ';
$s3 =  new Aws\S3\S3Client([
       'version' => 'latest',
       'region'  => '',
       'endpoint' => 'http://' . $ENDPOINT,
       'credentials' => array([
         'key'    => $ACCESSKEY,
         'secret' => $SECRETKEY
		])]);
}
catch (Exception $e){
	echo 'Caught exception: ',  $e->getmessage(), "\n";
}
?>

<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo $mystring; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
		</tr>
	</table>
</body>
</html>
