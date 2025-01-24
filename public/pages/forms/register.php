<?php

require '../../../bootstrap.php';

// if(isEmpty()){
//     flash('message','
// Fill in all fields!');

//     return redirect("create_user");
// }

// $validate = validateData([
//     'nm_user'=>'s',
//     'nm_email'=>'e',
//     'cd_password'=>'s'
// ]);

$hash = password_hash("123",PASSWORD_BCRYPT);
$senha = "123";
echo "$hash";


if(!password_verify($senha,$hash)){
    echo "<br>Acesso negado!";
}else{
    echo "<br>Acesso permitido!";
}

