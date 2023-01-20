<html>

<head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">


</head>

<body>
    <div>

        <div style="min-height: 100vh;flex-grow: 1;">
            <?php
            session_start();
            require_once("db-functions.php");
            $pricings = findAll();
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>

            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Update Pricing</a></h1>
                </div>
                <div class="formbg-outer" style="display:flex">
                    <?php

                    foreach ($pricings as $indexPricing => $pricing) {
                        echo '<div class="formbg">',
                        '<div class="formbg-inner padding-horizontal--48">',
                        '<form id="stripe-login" action="functions.php?action=update&id=' . $pricing['id'] . '" method="POST">';

                        $count = 0;
                    ?>
                        <div class="line">
                            <div class="field padding-bottom--24">
                                <label for="Name">Name</label>
                                <input type="text" id="Name" name="Name" value="<?= $pricing["Name"] ?>">
                            </div>
                            <div class="field padding-bottom--24">
                                <label for="Price">Price </label>
                                <input type="number" step="0.01" id="Price" name="Price" value="<?= $pricing["Price"] ?>">
                            </div>

                        </div>
                        <div class="line">
                            <div class="field padding-bottom--24">
                                <label for="Sale">Sale</label>
                                <input type="number" id="Sale" name="Sale" value="<?= $pricing["Sale"] ?>">
                            </div>

                            <div class="field padding-bottom--24">
                                <label for="Bandwidth">Bandwidth</label>
                                <input type="number" id="Bandwidth" name="Bandwidth" value="<?= $pricing["Bandwidth"] ?>">
                            </div>
                        </div>
                        <div class="line">

                            <div class="field padding-bottom--24">
                                <label for="Onlinespace">Onlinespace </label>
                                <input type="number" id="Onlinespace" name="Onlinespace" value="<?= $pricing["Onlinespace"] ?>">
                            </div>
                            <div class="field padding-bottom--24">
                                <label for="Support">Support</label>
                                <input type="number" id="Support" name="Support" value="<?= $pricing["Support"] ?>" min="0" max="1">
                            </div>
                        </div>
                        <div class="line">

                            <div class="field padding-bottom--24">
                                <label for="Domain">Domain </label>
                                <input type="text" id="Domain" name="Domain" value="<?= $pricing["Domain"] ?>">
                            </div>
                            <div class="field padding-bottom--24">
                                <label for="HiddenFees">HiddenFees</label>
                                <input type="number" id="HiddenFees" name="HiddenFees" min="0" max="1" value="<?= $pricing["HiddenFees"] ?>">
                            </div>
                        </div>
                    <?php





                        echo '<div class="field padding-bottom--24">
                        <input type="submit" name="submit" value="Update">
                    </div>', '</form>',
                        '</div>',
                        '</div>';
                    }

                    ?>

                </div>

            </div>
            <div id="navContainer">
                <nav class="navAdmin">
                    <a href="../index.php" class="navBtn" style="padding:13px">Index</a>
                    <a href="panier.php"class="navBtn fa-solid fa-basket-shopping" style="color:white; text-align:center;vertical-align: bottom; display:flex;align-items:center"></a>

                </nav>
            </div>
        </div>
    </div>
    </div>
</body>

</html>