<!DOCTYPE html>
<html>
<body>
<?php

require_once 'vendor/autoload.php';

use Uploadcare\Configuration;
use Uploadcare\Api as UploadcareApi;

$configuration = Configuration::create(
    'YOUR_PUBLIC_KEY',
    'YOUR_SECRET_KEY'
);

$uploader = (new UploadcareApi($configuration))->uploader();

$fileInfo = $uploader->fromPath(
    $_FILES["fileToUpload"]["tmp_name"],
    null,
    null,
    'auto'
);

echo "<img width='400' src='https://ucarecdn.com/" . $fileInfo . "/-/preview/' />";

?>
</body>
</html>