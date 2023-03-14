<?php
class FileValidation {
    
    private $_message;
    
    public function __construct()
    {
        $this-> _message = '';
    }
    
    public function validator()
    {
        if(!empty($_FILES)){
            if($_FILES["filesToUpload"]["size"] > _MAX_SIZE_){
                $this-> _message = "File is Very Large";
            }elseif(!strstr($_FILES["filesToUpload"]["type"], _FILE_TYPE_)){
                $this-> _message =  "File Type Not Supported";
            }else{
                $this-> _message = "File Uploaded Successfully";
            }
        }
        return $this-> _message;
    }
    
}