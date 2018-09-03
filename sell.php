<?php
    require 'init.php';

    if (isset($_GET['submit'])) {
        $sql = "
            INSERT INTO listings (name, descr, price, trustap_listing_id)
            VALUES ('${_GET['name']}', '${_GET['descr']}', ${_GET['price']}, '${_GET['trustap_listing_id']}')
        ";
        if (!$mysql_conn->query($sql)) {
            die("Couldn't insert: " . $mysql_conn->error);
        }

        header('Location: index.php');
    }
?>
<html>
    <head>
        <style>
#trustap {
    display: inline;
}
        </style>
    </head>
    <body>
        <h1>New Listing</h1>
        <form>
            <label for="name">Name: </label><input type="text" id="name" name="name" value="Car" />
            <br />
            <label for="descr">Description: </label><input type="text" id="descr" name="descr" value="Green" />
            <br />
            <label for="price">Price: $</label><input type="number" id="price" name="price" value="1000" />
            <br />
            Use Trustap: <div id="trustap"></div>
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>

        <script src="<?php echo $trustapHost; ?>/intg/intg.js"></script>
        <script>
            const trustap = initTrustap();
            trustap.createUseTrustapCheckbox('trustap', 'use-trustap');
        </script>
    </body>
</html>
