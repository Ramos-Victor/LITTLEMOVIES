<?php

function connect(){
    $pdo = new \PDO("mysql:host=localhost;dbname=db_little_movies;charset=utf8",'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    return $pdo;
}

function create ($table,$fields){
    $pdo = connect();

    if(!is_array($fields)){
        $fields = (array) $fields;
    }

    $sql = "insert into {$table}";
    $sql.="(".implode(',', array_keys($fields)).")";

    $sql.=" values(". ":".implode(',:', array_keys($fields)).")";

    $insert = $pdo->prepare($sql);

    return $insert->execute($fields);
}

function all($table){
    $pdo = connect();

    $sql = "select * from {$table}";
    $list = $pdo->query($sql);
    $list->execute();

    return $list->fetchAll();
}

function update($table,$fields,$where){
    if(!is_array($fields)){
        $fields = (array) $fields;
    }

    $pdo = connect();

    $data = array_map(function($field){
        return "$field = :{$field}";
    },array_keys($fields));

    $sql = "update {$table} set ";

    $sql.=implode(',',$data);

    $sql.= "where {$where[0]} = :{$where[0]}";

    $update = $pdo->prepare($sql);

    $data = array_merge($fields,[$where[0] => $where[1]]);

    $update->execute($data);

    return $update->rowCount();
}

function find($table,$field,$value){
    $pdo = connect();

    $sql = "select * from {$table} where {$field} =:{$field}";

    $find = $pdo->prepare($sql);
    $find->bindValue($field,$value);

    $find->execute();

    return $find->fetch();
}

function delete($table, $field, $value){
    $pdo = connect();

    $sql = "delete from {$table} where {$field} =:{$field}";

    $delete = $pdo->prepare($sql);
    $delete->bindValue($field,$value);

    return $delete->execute();
}