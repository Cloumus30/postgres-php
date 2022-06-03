<?php
namespace Migrate\AdminTable;

class AdminTable{
    protected $dbConnect;
    protected $query;

    public function __construct($dbConnect)
    {
        $this->dbConnect = $dbConnect;
        $this->query = "CREATE TABLE admins (
            id int NOT NULL,
            account_id int,
            name varchar(255) NOT NULL,
            photo varchar(255),
            phone varchar(255),
            CONSTRAINT PK_admins PRIMARY KEY(id),
            CONSTRAINT FK_AccountAdmin FOREIGN KEY (account_id)
            REFERENCES accounts(id)
            )";        
    }

    public function migrate(){
        echo "migrate admins starting \n";
        $result = pg_query($this->dbConnect,$this->query);
        if(!$result){
            echo pg_last_error();
            return pg_last_error();
        }
        echo "migrate Table admins success \n";
    }
}