<?php

class Crypt {

    public function encrypt($string) {
     
        return password_hash($string, PASSWORD_DEFAULT);
        
    }

public function verify($string, $hash) {

    return password_verify($string, $hash);
        
}


}
