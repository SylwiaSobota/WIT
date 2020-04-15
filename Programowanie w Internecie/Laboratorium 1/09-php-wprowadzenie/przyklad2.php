<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Przykład 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        for($i = 0; $i < 10; $i++) {
			if ($i%2==0){
            echo "<table border='1'><tr><td style='background-color: yellow;'>Paragraf #$i</td></tr></table>";}
			else
			{ echo "<table border='1'><tr><td>Paragraf #$i</td></tr></table>";}
        }
    ?>
        
    <?php for($i = 0; $i < 10; $i++): ?>
	<table border="1">
		<?php if ($i%2==0): ?> 
		 <tr><td style='background-color: yellow;'>Paragraf #<?=$i ?></td></tr>
		</table>
	<table>
	<?php else: ?> 
		 <tr><td>Paragraf #<?=$i ?></td></tr>
		</table>
	<?php endif; ?>
    <?php endfor; ?>
	
</body>
</html>