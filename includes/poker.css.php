<?php

header ('Content-Type: text/css');
require_once ('poker_constants.php');
?>

body {
    background-color: #00019F;
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
    background-color: #FFFF00;
    color: #000;
    border: 0;
}

#hand_type {
    color: #FFFF00;
    text-transform: uppercase;
    background-color: black;
<?php echo POKER_FONT; ?>
}

#payoff {
    background-color: black;
<?php echo POKER_FONT; ?>
}

#user_pane {
    color: #FFFF00;
    text-align: right;
    font-family: sans-serif;
    font-weight: bold;
    padding: 10px;
    text-transform: uppercase;
}
#logout {
    font-size: .75em;
    color:white;
    text-decoration: none;
}