<?php
try {
    $db = new PDO('mysql:dbname=hitokoto;host=127.0.0.1;charset=utf8mb4', 'hitokotouser', 'password');
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>