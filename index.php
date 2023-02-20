<?php 
$_Text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime odit fuga voluptatibus velit ad expedita deleniti inventore consequatur dolore, voluptatum veritatis molestias officiis nulla hic error aut, magnam itaque eveniet.";
$_TextLength = strlen($_Text);
$_ForbiddenWord = $_GET['forbidden'];
$_NewText = str_replace($_ForbiddenWord, '***', $_Text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Badwords </title>
    <p> Il testo è : "<?php echo $_Text ?>" e la sua lunghezza è : <?php echo $_TextLength ?> </p>
    <p> La parola da censurare è <?php echo $_ForbiddenWord ?></p>
    <p> Testo censurato : <?php echo $_NewText ?> e la sua lunghezza è : <?php echo strlen($_NewText) ?> </p>
    <form action="">
        <input type="text" name="forbidden">
        <button type="submit"> Invia </button>
    </form>
</head>
<body>
</body>
</html>