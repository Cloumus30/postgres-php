<?php
namespace Migrate\InitTable;
include('DB.php');
use Home\DB;

$db= new DB();
$dbConnect = $db->dbVal;

// table account
$accountsTable = "CREATE TABLE accounts (
    id int NOT NULL,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    address varchar(255),
    CONSTRAINT PK_accounts PRIMARY KEY (id),
    UNIQUE (email)
    )";

// table admin
$adminTable = "CREATE TABLE admins (
    id int NOT NULL,
    account_id int,
    name varchar(255) NOT NULL,
    photo varchar(255),
    phone varchar(255),
    CONSTRAINT PK_admins PRIMARY KEY(id),
    CONSTRAINT FK_AccountAdmin FOREIGN KEY (account_id)
    REFERENCES accounts(id)
    )";

try {
    $result[] = pg_query($dbConnect,$accountsTable);
    $result[] = pg_query($dbConnect,$adminTable);
    echo "success migrate";
} catch (\Throwable $th) {
    echo $th->getMessage();
}