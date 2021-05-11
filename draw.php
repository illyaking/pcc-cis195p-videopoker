<?php

require_once ('includes/poker_constants.php');
require_once ('includes/poker_code.php');
require_once ('includes/hand_type.php');

$deck = json_decode(urldecode($_POST[DECK_KEY]));
$hand = json_decode(urldecode($_POST[HAND_KEY]));

draw_cards($hand, $deck);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Poker</title>
    <link rel="stylesheet" type="text/css" href="includes/poker.css.php">
    <script src="includes/poker.js.php"></script>
</head>
<body onload="javascript:init();">
<div id="spacer"></div>
<?php show_content($hand, TRUE); ?>
</body>
</html>