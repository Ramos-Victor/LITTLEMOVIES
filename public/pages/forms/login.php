<?php

require '../../../bootstrap.php';

if(isEmpty()){
    flash('message','
Fill in all fields!');

    return redirect("login");
}