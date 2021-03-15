<?php

function get_connection(){
    $conf = require 'config.php';
    $pdo = new PDO(
        $conf['db_dsn'], 
        $conf['db_user'],
        $conf['db_pw'] 
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}

function get_accounts($limit = null)
{
    $pdo = get_connection();
    
    $query = 'SELECT * FROM account';
    if($limit){
        $query = $query.' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $accounts = $stmt->fetchAll();
    return $accounts;
}

function get_users($limit = null)
{
    $pdo = get_connection();
    
    $query = 'SELECT * FROM user';
    if($limit){
        $query = $query.' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function get_trips($limit = null)
{
    $pdo = get_connection();
    
    $query = 'SELECT * FROM trip';
    if($limit){
        $query = $query.' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}

function get_card($limit = null)
{
    $pdo = get_connection();
    
    $query = 'SELECT * FROM card';
    if($limit){
        $query = $query.' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll();
    return $data;
}
/*
function get_one_pet($id){
    $pdo = get_connection();
    $query = 'SELECT * FROM pets WHERE id = :idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->execute();
    return $stmt->fetch();
}

function pets_to_save($newPet){
    
    $json = json_encode($newPet, JSON_PRETTY_PRINT);
    file_put_contents('data/pets.json', $json);
}
*/