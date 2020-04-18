<?php
session_start();

if (isset($_POST['zaloguj'])) {
    if ($_POST['uzytkownik'] == 'admin' && $_POST['haslo'] == 'tajne') {
        $_SESSION['zalogowany'] = 'tak';
        header("Location: tajne.php");
        exit(); 
	}
	 else {
		$komunikat = "Wprowadzono zły login lub hasło.";
	}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WIT</title>
</head>

<body>
    <?php if(!empty($komunikat)) : ?>
        <p style="color: red;"><?=$komunikat ?></p>
    <?php endif; ?>

    <form method="post" action=" ">
        Nazwa użytkownika:
        <input type="text" name="uzytkownik" />
        <br />

        Hasło:
        <input type="password" name="haslo" />
        <br />
        <br />

        <input type="submit" name="zaloguj" value="Zaloguj" />
    </form>
</body>

</html>