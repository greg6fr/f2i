<?php
 class Verification {

   private $error = [];

    public function validator($nom,$min,$max,$error, $message) {
        if (strlen($nom)<$min || strlen($nom)>$max) {
            # code...
            $this->error = array_push($error,$message);
        }  
        return $this->error;
    }

    public function getError() {
return $this->error;
    }

    public function setError($err) {
            $this->error=$err;
    }

    public g
}

?>