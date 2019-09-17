<?php
    include ('../session.php');

    $session_ = new Session();
    $_SESSION['status'] = 0;
    setcookie("ses_id", Session::$session_id, time() + 3600);
    $id = '';
    $value = '';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    if (isset($_POST['value'])) {
        $value = $_POST['value'];
    }

    $_SESSION[$id] = $value;
    echo "Done";
?>