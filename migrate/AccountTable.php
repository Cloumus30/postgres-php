<?php
namespace Migrate\AccountTable;

class AccountTable{
    protected $dbConnect;
    protected $query;

    public function __construct($dbConnect)
    {
        $this->dbConnect = $dbConnect;
        $this->query = "CREATE TABLE accounts (
            id int NOT NULL,
            username varchar(255) NOT NULL,
            email varchar(255) NOT NULL,
            address varchar(255),
            CONSTRAINT PK_accounts PRIMARY KEY (id),
            UNIQUE (email)
            )";        
    }

    public function migrate(){
        echo "migrate accounts starting \n";
        $result = pg_query($this->dbConnect,$this->query);
        if(!$result){
          echo pg_last_error();
          return pg_last_error();
        }
        echo "migrate accounts success \n";
    }
}

// $db= new DB();
// $dbConnect = $db->dbVal;

// // table account
// $accountsTable = "CREATE TABLE accounts (
//     id int NOT NULL,
//     username varchar(255) NOT NULL,
//     email varchar(255) NOT NULL,
//     address varchar(255),
//     CONSTRAINT PK_accounts PRIMARY KEY (id),
//     UNIQUE (email)
//     )";

// try {
//     $result[] = pg_query($dbConnect,$accountsTable);
//     $result[] = pg_query($dbConnect,$adminTable);
//     echo "success migrate";
// } catch (\Throwable $th) {
//     echo $th->getMessage();
// }