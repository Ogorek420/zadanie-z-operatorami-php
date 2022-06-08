<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spać mi sie chce</title>
</head>
<body>
<style> .cs {
    background-color: pink;
    padding: 10px;
    margin: 10px;
} body {
    background-color: lightpink; }
</style>
<div class="cs"> <?php
    $wszystkość = array();
    for($i=1; $i <= 20; $i++) {
        $cyfra = rand(1,20);
        array_push($wszystkość, $cyfra);
        if($cyfra%2 == 0) { 
        print_r("skakać $i($cyfra)<p> ");
        } else {
        print_r("nie skakać $i($cyfra).<p> "); } }
    $średniaczek = 0;
    if(count($wszystkość)) {
        $średniaczek = array_sum($wszystkość) / count($wszystkość); }
    print_r("średniaczek $średniaczek. ");
    $sum = array_sum($wszystkość);
    print_r("sum $sum. "); ?>
</body>
</html>