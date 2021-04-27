<?php
require 'connection.php'; ?>
<!DOCKTYPE HTML>
<html>
<head>
    <title>Лаба 6</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="result.php" method="get">
        <p>Выполненных задачах по выбранному проекту на указанную дату:</p>
    <select name="name1">
    <?php

    $person=$db->find([],
        ['_id' => 0, 'projectName' => 1]);
            
    foreach ($person as $per) {
    echo '<option value="'.$per['projectName'].'">'.$per['projectName'].'</option>';
}
    ?>
    </select>
        <input type="date" value="2020-11-10" name="date1"> 
       <button type="submit">Поиск</button>
    </form> 

    <form action="result2.php" method="get">
        <p>Количестве проектов указанного руководителя:</p>
    <select name="name2">
    <?php
    $person=$db->find([],
        ['_id' => 0, 'manager' => 1]);
            
    foreach ($person as $per) {
    echo '<option value="'.$per['manager'].'">'.$per['manager'].'</option>';
}
    ?>
    </select> 
       <button type="submit">Поиск</button>
    </form>   


    <form action="result3.php" method="get">
        <p>Cотрудниках, работавших под началом выбранного руководителя</p>
    <select name="name3">
    <?php
    
    $person=$db->find([],
        ['_id' => 0, 'manager' => 1]);
            
    foreach ($person as $per) {
    echo '<option value="'.$per['manager'].'">'.$per['manager'].'</option>';
}
    ?>
    </select> 
       <button type="submit">Поиск</button>
    </form>    

</body> 