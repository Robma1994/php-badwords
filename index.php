
<?php
    //Creazione variabile test
    $text = 'Forza Napoli tie';
    //Parametro Get
    $keyWord = $_GET['name'];
    $lenghtTextUser = strlen($keyWord);
?>

<!-- 2.Stampare a schermo il paragrafo e la sua lunghezza. -->
<p> <?php echo $text ?></p>
<p>La lunghezza del testo è di: <?php echo strlen($text)?> lettere</p>

<!-- 3.Una parola da censurare viene passata dall'utente tramite parametro GET. -->


<!-- 4.Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->

<p>
    <?php 
        echo str_replace($keyWord,'***',$text);
    ?>
</p>
<p> Lunghezza paragrafo: 
    <?php echo strlen(str_replace($keyWord,'***',$text))?>
    lettere
</p>