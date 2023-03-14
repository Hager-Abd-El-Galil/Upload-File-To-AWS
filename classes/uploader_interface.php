<?php

interface uploader_interface{
    
    public function s3_client();
    public function upload_file($file_path);
    
}