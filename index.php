<?php
namespace index;
include('./Model/Account.php');

use Model\Account;

$accounts = new Account();
$accounts = $accounts->selectAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloudias</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            <th>address</th>
        </tr>
        <?php 
            // foreach ($accounts as $key => $value) {
            //     echo $key;
            // }
            var_dump($accounts);
        ?>
        
    </table>
</body>
</html>