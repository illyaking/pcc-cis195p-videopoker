<?php

require_once ('includes/utilities.php');
require_once ('includes/page_constants.php');

session_start();
destroy_session();
header('Location: ' . LOGIN_PAGE);