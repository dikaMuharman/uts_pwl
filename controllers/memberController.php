<?php
require '../config/koneksi.php';
require '../models/Member.php';

if (!empty($_POST['login'])) {
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

    $member = new Member();
    $user = $member->getMember($username);
    if ($user) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['member'] = $user;
            header('location:http://localhost/tugas-uts/index.php');
        } else {
            header('location:http://localhost/tugas-uts/index.php?hal=login');
        }
    } else {
        header('location:http://localhost/tugas-uts/index.php?hal=login');
    }
}else {
    header('location:http://localhost/tugas-uts/index.php?hal=login');
}