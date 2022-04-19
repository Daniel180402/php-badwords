<?php
    $frase = "Hello World Hello!";
?>

<pre>
    <?php
        var_dump($frase);
        var_dump(str_replace($_GET['word'], '***', $frase))
    ?>
</pre>