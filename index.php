
<?php
    //Creazione variabile test
    $text = 'tie';
    //Parametro Get
    $keyWord = $_GET['name'];
    $lenghtTextUser = strlen($keyWord);
?>

<!-- 2.Stampare a schermo il paragrafo e la sua lunghezza. -->
<p>Forza Napoli <?php echo $text ?></p>
<p>La lunghezza del testo è di: <?php echo strlen($text)?> lettere</p>

<!-- 3.Una parola da censurare viene passata dall'utente tramite parametro GET. -->
<h1><?php echo $keyWord ?></h1>

<!-- 4.Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->

<h2>
    <?php 
        
        echo str_replace($keyWord,'***',$keyWord);
    ?>
</h2>