<?php
$liczbaWierszy = $_POST['liczba_wierszy'] ?? 2;
$liczbaKolumn = $_POST['liczba_kolumn'] ?? 2;
$kolorTla = $_POST['kolor_tla'] ?? 'white';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WIT</title>
    <style>
        td {
            border: 1px solid black;
        }
		td.zolty{
			background-color: yellow;
		}
    </style>
</head>

<body style="background-color: <?= $kolorTla ?>">
    <table>
		<?php if(isset($_POST['kolor'])) : ?>
        <?php for ($i = 0; $i < $liczbaWierszy; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < $liczbaKolumn; $j++) : ?>
                <?php if ($i%2==0): ?>
				<td class="zolty"><?= $i ?>.<?= $j ?></td>
				<?php else: ?>
				<td><?= $i ?>.<?= $j ?></td>
				<?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
		<?php else: ?>
		   <?php for ($i = 0; $i < $liczbaWierszy; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < $liczbaKolumn; $j++) : ?>
                <?php if ($i%2==0): ?>
				<td><?= $i ?>.<?= $j ?></td>
				<?php else: ?>
				<td><?= $i ?>.<?= $j ?></td>
				<?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
		<?php endif; ?>
    </table>
</body>

</html>