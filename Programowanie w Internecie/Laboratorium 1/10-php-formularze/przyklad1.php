<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WIT</title>
</head>

<body>
    <?php if (!empty($_POST)) : ?>
        <table>
            <tr>
                <th>Nazwa pola</th>
                <th>Wartość</th>
            </tr>

            <?php foreach ($_POST as $klucz => $wartosc) : ?>
                <tr>
                    <td><?= $klucz ?></td>
                    <td><?= $wartosc ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>

</html>