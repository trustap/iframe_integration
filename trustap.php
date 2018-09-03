<?php
    require 'init.php';
?>
<html>
    <head>
        <style>
iframe {
    border: 0;
    border-radius: 2px;
    display: block;
    width: 80%;
    height: 500px;
    margin: 0 auto;
}
        </style>
    </head>
    <body>
        <iframe src="<?php echo $trustapHost; ?>/offline/iframes/my_transactions.php" />
    </body>
</html>
