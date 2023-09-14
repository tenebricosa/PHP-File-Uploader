<!DOCTYPE html>
<html>
<body>
<?php

require_once 'vendor/autoload.php';

use Uploadcare\Configuration;
use Uploadcare\Api as UploadcareApi;

$configuration = Configuration::create(
    'c76afb86b9c735c1c2f9',
    '95e978da240ec4af88a7'
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