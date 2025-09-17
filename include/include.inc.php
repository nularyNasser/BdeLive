<?php
    function start_page(string $title){
?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title><?= $title ?></title>
        </head>
        <body>
<?php } ?>

<?php
    function end_page(){
?>
    </body>
</html>
<?php } ?>