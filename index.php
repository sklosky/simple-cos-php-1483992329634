<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>

<?php

require 'vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
$mystring = "Hello IBM COS World!";
// Initialize variables
$ENDPOINT = 's3-api.us-geo.objectstorage.softlayer.net';
$ACCESSKEY = 'VfAY8vRGl6LvV4XjZaM7';
$SECRETKEY = 'C6lhiZo1U32iHykYrTCa7SDRP9BUtesLzd7RVdBQ';
$s3 = S3Client::factory(array(
    'version' => 'latest',
    'region'  => '',
    'endpoint' => 'http://'.$ENDPOINT,
    'credentials' => array(
         'key'    => $ACCESSKEY,
         'secret' => $SECRETKEY
    )
));

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
				<?php
					echo 'looping through buckets';
					$result = $s3->listBuckets(array());
					foreach ($result['Buckets'] as $bucket) {
					echo "<p>";
					echo $bucket['Name'];
					echo "</p>";
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>
