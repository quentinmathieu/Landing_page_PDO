<html>

<head>
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">

</head>

<body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="loginbackground box-background--white padding-top--64">
                <div class="loginbackground-gridContainer">
                    <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                        <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                        <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                        <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                        <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                        <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                        <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                        <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                        <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;">
                        </div>
                    </div>
                    <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                        <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Update Pricing</a></h1>
                </div>
                <div class="formbg-outer" style="display:flex">
                    <?php
                    session_start();
                    require_once("db-functions.php");
                    $pricings = findAll();
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
                                    <label for="Sale">Sale</label>
                                    <input type="number" id="Sale" name="Sale" value="<?= $pricing["Sale"] ?>">
                                </div>
                        </div>
                        <div class="line">

                            <div class="field padding-bottom--24">
                                <label for="Price">Price </label>
                                <input type="number" id="Price" name="Price" value="<?= $pricing["Price"] ?>">
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
                                <input type="number" id="HiddenFees" name="HiddenFees"  min="0" max="1"value="<?= $pricing["HiddenFees"] ?>" >
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
        </div>
    </div>
    </div>
</body>

</html>