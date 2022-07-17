<?php

require_once('Classes/RenderClass.php');
require_once('Classes/AbstractClass.php');
require_once('Classes/crest.php');

$abstractData = new AbstractClass();
$template = new RenderClass();

// Auth
if (isset($_REQUEST['token_v1'])) {
    $user = $abstractData->auth();
}

if (isset($_SESSION['auth'])) {
    $abstractData->logout('/database/index.php');
    echo $template->renderTemplate('profile', ['user' => $user['result']]);
} else {
    echo $template->renderTemplate('auth_form', ['abstractData' => $abstractData]);
}

