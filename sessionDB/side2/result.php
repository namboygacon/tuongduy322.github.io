<?php
    include ('../session.php');
    $session_ = new Session($_POST['ses_id']);
    $id = '';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }

    echo $_SESSION[$id];
?>