<?php
$json_data = file_get_contents('./Mobile.json');
$result = json_decode($json_data,true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php
        print_r($result);
        
        ?> 
    <lo>   
</body>
</html>