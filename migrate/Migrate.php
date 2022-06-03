<?php
namespace Migrate\Migrate;
include('DB.php');
include('AccountTable.php');
include('AdminTable.php');

use Home\DB;
use Migrate\AccountTable\AccountTable;
use Migrate\AdminTable\AdminTable;

$db= new DB();
$dbConnect = $db->dbVal;

$accountTable = new AccountTable($dbConnect);
$accountTable->migrate();

$adminTable = new AdminTable($dbConnect);
$adminTable->migrate();