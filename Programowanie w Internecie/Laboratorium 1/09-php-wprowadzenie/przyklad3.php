<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Przykład 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        $kolory = [
            "red", "green", "gray", "blue", "pink"
        ];
        
        foreach($kolory as $klucz ) {
            echo "<ul><li style='color:$klucz;'> $klucz </li></ul>";
        }
    ?>
<ul>
    <?php foreach($kolory as $klucz ): ?>
	<li style='color:<?=$klucz ?>;'><?=$klucz ?> </li>
	<?php endforeach; ?></ul>
</body>
</html>
