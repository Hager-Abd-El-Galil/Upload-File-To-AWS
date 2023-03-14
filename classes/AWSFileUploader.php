<?php
use Aws\S3\S3Client;

class AWSFileUploader implements uploader_interface {
    
    private $_bucket_name;
    private $_key;
    private $_secret;
    private $_region;
    private $_id;
    private $_s3; 

    public function __construct()
    {
        $this -> _bucket_name = _BUCKET_NAME_;
        $this -> _key = _ACCESS_KEY_;
        $this -> _secret = _SECRET_ACCESS_KEY_;
        $this -> _region = _REGION_;
        $this -> _id = uniqid();
    }
    
    public function use_s3_client()
    {
        $this -> _s3 = S3Client::factory(array(
          'credentials' => array(
              'key' => $this -> _key,
              'secret' => $this -> _secret,
          ), 'region' => $this -> _region,
          'version' => 'latest'
      ));
    
    }
    
    public function upload_file($file_path)
    {
        $this -> _s3 -> upload($this -> _bucket_name, $this -> _id, $file_path);    
    }   
}
    
