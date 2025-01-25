<?php
use Ramsey\Uuid\Nonstandard\Uuid;

require '../../../bootstrap.php';

if(isEmpty()){
    flash('message','
Fill in all fields!');

    return redirect("create_user");
}

$validate = validateData([
    'nm_user'=>'s',
    'nm_email'=>'e',
    'cd_password'=>'s'
]);

$validate->cd_password = password_hash("$validate->cd_password",PASSWORD_BCRYPT);

$validate->cd_user = Uuid::uuid4()->toString();

dd($validate);


// if(!password_verify($senha,$hash)){
//     echo "<br>Acesso negado!";
// }else{
//     echo "<br>Acesso permitido!";
// }

