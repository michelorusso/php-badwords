<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Hello PHP!</title>

</head>
<body>

<?php

    // GET
    $censored = $_GET['badword'];

    // Original Text
    $messages = "Di tutte le cose insolite di Harry, quella cicatrice era la più straordinaria.
    Non era, come i Dursley avevano sostenuto per dieci anni, il segno dell'incidente d'auto in cui erano morti i genitori di Harry, perché Lily e James
    Potter non erano morti in un incidente. Erano stati uccisi dal più temuto
    stregone degli ultimi cent'anni, Voldemort. Ma Harry era scampato all'attacco senz'altro segno che quella cicatrice: la maledizione di Voldemort,
    invece di ucciderlo, si era ritorta contro chi l'aveva scagliata. Più morto che
    vivo, lo stregone era fuggito...
    In seguito, Harry si era trovato faccia a faccia con lui a Hogwarts. Nel
    ricordare il loro ultimo incontro, lì in piedi davanti alla finestra buia, Harry
    dovette ammettere di essere fortunato ad aver raggiunto il suo tredicesimo
    compleanno.";

    // Text Censored -> replaces the word entered via get with *** and modifies the original message
    $newMex = str_replace($censored, '***', $messages);
    
    // lenght original messages
    $lenghtOriginalMex = strlen($messages);

    // lenght censored messages
    $lenghtCensoredMex = strlen($newMex);

?>

<!-- ORIGINAL TEXT -->
<h2 style='text-align: center; color: #4d4dff'> Original Text </h2>
    
    <p style='font-size: 20px'><?php echo $messages ?></p>

    <h4 style='color: #19334d'>Message Length</h4>

    <span><?php echo $lenghtOriginalMex ?></span>

<!-- CENSORED TEXT -->
<h2 style='text-align: center; color: #267326' > Censored Text </h2>
    
    <p style='font-size: 20px'><?php echo $newMex ?></p>

    <h4 style='color: #53c653'>Message Length</h4>

    <span><?php echo $lenghtCensoredMex ?></span>

</body>
</html>