<?php
function crawlpaginar() {
       $html_da_pag = file_get_contents("https://websitedocaralho.com.br/");
       $palavrasenc = preg_match_all("/website/", "$html_da_pag", $encontrados);
       $vezesenc = $palavrasenc -1;
       if($vezesenc > 0) {
           return "<br><span>Palavra: {$encontrados[0][0]}<br>Encontrada: $vezesenc Vezes</span>";
       }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB CRAWLER</title>
<style>
body {
    background-color:black;
}
.resultado {
    color:red;
    font-family:'Roboto', sans-serif;
}
</style>
</head>
<body>
<div class="resultado">
    <center>
    <?php echo crawlpaginar();?>
    </center>
    </div>
</body>
</html>
