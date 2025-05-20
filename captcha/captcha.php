<?php
session_start();
$captcha = mt_rand();
$_SESSION ['captcha_code'] = $captcha;
require_once 'login_form.php';