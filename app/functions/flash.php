<?php

function flash($key,$message,$type = 'danger'){
    if(!isset($_SESSION['flash'][$key])){
        $_SESSION['flash'][$key]= "
            <div class='d-flex justify-content-center mt-3'>
                <span class='alert alert-{$type}'>{$message}</span>
            </div>
        ";
    }
}

function get($key){
    if(isset($_SESSION['flash'][$key])){
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }

}