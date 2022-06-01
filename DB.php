<?php
namespace Home;

Class DB{
    protected $host;
    protected $port;
    protected $dbName;
    protected $user;
    protected $password;
    protected $table;

    public $dbVal;

    public function __construct(
        $host="127.0.0.1",
        $port=5432,
        $dbName="postgres_db",
        $user = "dana",
        $password="Ciel17092000",
        $table="")
    {
        $this->host = $host;
        $this->port = $port;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
        
        $this->tabel = $table;

        $this->dbVal = pg_connect("host=$this->host port=$this->port dbname=$this->dbName user=$this->user password=$this->password");
    }

    public function selectAll(){
        $query = "SELECT * FROM $this->table";
        return pg_query($this->dbVal,$query);
    }

}