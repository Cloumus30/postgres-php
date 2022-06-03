<?php
namespace Model;
use Home\DB;

include('DB.php');

class Account extends DB{
    protected $table = 'accounts';
    
    public function selectAll(){
        $query = "SELECT * FROM $this->table";
        $result = pg_query($this->dbVal,$query);
        if(!$result){
            echo pg_last_error();
        }
        $hasil = [];
        while($temp = pg_fetch_assoc($result)){
            $hasil[] = $temp;
        }
        return $hasil;
    }
   
}