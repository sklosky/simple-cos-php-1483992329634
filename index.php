<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello IBM COS World!"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
		</tr>
	</table>

<?php
//
// list-cos-buckets.php
//

echo 'starting list cos-buckets';

//use Aws\S3\S3Client;
//use Aws\S3\Exception\S3Exception;
//date_default_timezone_set ( 'America/New_York' );

echo 'initializing variables';
// Initialize variables
//$ENDPOINT = 's3-api.us-geo.objectstorage.softlayer.net';
//$ACCESSKEY = 'VfAY8vRGl6LvV4XjZaM7';
//$SECRETKEY = 'C6lhiZo1U32iHykYrTCa7SDRP9BUtesLzd7RVdBQ';

//
// Instantiate the client.
//
echo 'instantiating the client'
//$s3 = S3Client::factory(array(
//    'version' => 'latest',
//   'region'  => '',
//    'endpoint' => 'http://'.$ENDPOINT,
//    'credentials' => array(
//         'key'    => $ACCESSKEY,
//         'secret' => $SECRETKEY,
//    )
//));

//
// Loop through each bucket
//
echo 'looping through buckets';
//try {
//    $result = $s3->listBuckets(array());
//    foreach ($result['Buckets'] as $bucket) {
//        echo $bucket['Name'];
//        echo "<br>";
//    }
//} catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
//}

?>

</body>
</html>
