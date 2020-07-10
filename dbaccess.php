<?php
$dsn = 'mysql:host=database-xmy.crqmemsomjjy.ap-northeast-1.rds.amazonaws.com;dbname=DB_xmy';
$username = 'svc_user';
$password = 'HYRONxumouyi1588';

// try-catch
try{
        $pdo = new PDO($dsn,$username,$password);

        $sql = "select created_at, data from my_first_table order by created_at desc limit 1";

        $stmt = $pdo->prepare($sql);

        $stmt -> execute();

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);

        $sqlins = "insert into my_first_table (data) values ('insert test from " . exec(hostname) . "')";

        $stmtins = $pdo->prepare($sqlins);

        $stmtins -> execute();

}catch (PDOException $e) {
}

function escape1($str)
{
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>test page for database access</title>
</head>
<body >
Last Access Time<br><br>
<?php foreach ($rec as $a):?>
        <?=escape1($a)?><br>
<?php endforeach; ?>
Add comment by xumouyi
Add another comment by xumouyi
</body>
</html>

