<style>
<?php include './views/style.css'?>
</style>

<?php

require_once('./vendor/autoload.php');

$Validation = new FileValidation();
$FileValidation = $Validation -> validator();

$uploaded_file_s3 = new AWSFileUploader();
$uploaded_file_s3 -> use_s3_client();

if(!empty($_FILES)){
    try{
        $uploaded_file_s3 -> upload_file($_FILES["filesToUpload"]["tmp_name"]);
    }catch(Aws\s3\Exception\s3Exception $e){
        echo "There was an Error at Uploading the file";
    }
}

require_once('./views/uploadFile.php');
