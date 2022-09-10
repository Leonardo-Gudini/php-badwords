<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
    <?php 
        $wordReceived = $_POST['word'];

        $badword = str_replace($wordReceived, '***', $wordReceived);
        
        $text = 'La Parolaccia è ' . ' ' . $badword;

        echo $text . '<br>';

        echo 'La frase è lunga: ' . strlen($text);
    ?>

</body>
</html>