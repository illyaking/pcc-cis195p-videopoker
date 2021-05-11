<?php

header ('Content-Type: text/css');
require_once ('poker_constants.php');
?>

body {
    background-image: url('../images/poker_table.jpg');
    background-color: #000000;
    height: auto;
}

.card_img {
    max-width: <?php echo CARD_IMAGE_PERCENT; ?>;
    max-height: <?php echo CARD_IMAGE_PERCENT; ?>;
    cursor: pointer;
}

.card {
    text-align: center;
    display: inline-block;
    max-width: <?php echo 100 / HAND_CARDS; ?>%;
    max-height: 100%;
}

.statement {
<?php echo POKER_FONT_TWO; ?>
    margin: 0 10% 0 10%;
    text-align: center;
}

#hand {
    font-size: 0px;
    padding: <?php echo HAND_PADDING; ?>;
}

#info {
    text-align: center;
    padding: <?php echo HAND_PADDING; ?>;
}

#draw_button {
<?php echo POKER_FONT; ?>
<?php echo POKER_FONT_TWO; ?>
    cursor: pointer;
}

#draw_button:hover {
    background-color:darkgoldenrod;
    color: goldenrod;
    box-shadow: 0px 0px 0px;
}

#hand_type {
<?php echo POKER_FONT; ?>
}

#payoff {
<?php echo POKER_FONT; ?>
}
#content {
    visibility: hidden;
}