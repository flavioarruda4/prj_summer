<?php

if (!defined('MyConst')) {
    if (!(isset($_SESSION['login']) == true) and ( isset($_SESSION['senha']) == true)) {
        header('location: /prj_summer/index.php');
    }
}
