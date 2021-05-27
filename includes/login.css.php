<?php

header ('Content-Type: text/css');
?>
body {
    background-image: url('../images/poker_table.jpg');
    background-color: #000000;
}
input[type=text], [type=password] {
    font-size: 1.125em;
    padding: 10px;
    width: 70%;
}
input[type=submit]{
    background-color: #C0C0C0;
    font-family: Garamond, serif;
    padding: 10px 20px;
    font-size: 1.25em;
    box-shadow: 2px 2px 3px rgba(0,0,0,.5);
    border-radius: 10px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #D4AF37;
    color: #fff;
    box-shadow: 0px 0px 0px;
}
#error_box {
    background: linear-gradient(#C5B358, #D4AF37);
    color: black;
    border: 2px solid #996515;
    box-shadow: 5px 5px 5px rgba(0,0,0,.5);
    border-radius: 10px;
    margin: 0 auto 20px;
    padding: 10px;
    text-align: center;
    width: 50%;
}
#error_header {
    text-align: center;
    color: #fff;
    font-weight: bold;
    font-size: 2em;
}
#error_detail {
    text-align: center;
    color: #fff;
    font-size: 1.5em;
}
#login_content {
    font-family: Garamond, serif;
    font-size: 1.25em;
    padding-top: 20px;
    text-align: center;
}
.intro {
    font-family: Garamond, serif;
    text-align: center;
    font-size: 1.5em;
    line-height: 1em;
    text-transform: uppercase;
}
.login_header {
    font-size: 1.5em;
    margin-bottom: 20px;
}
.login_label {
    text-align: right;
 }
.login_or {
    margin: 20px auto;
    font-weight: bold;
    background: linear-gradient(#C5B358, #D4AF37);
    color: #fff;
    border: 2px solid #996515;
    box-shadow: 5px 5px 5px rgba(0,0,0,.5);
    border-radius: 10px;
    padding: 10px;
    text-align: center;
    width: 100px;
}
.login_submit {
    margin: 10px;
    text-align: right;
}
.login_table {
    background: linear-gradient(#C5B358, #D4AF37);
    color: #fff;
    border: 2px solid  #996515;
    box-shadow: 5px 5px 5px rgba(0,0,0,.5);
    border-radius: 10px;
    margin: 0 auto;
    padding: 5px;
    text-align: center;
    width: 50%;
}


