<?php
session_start();
include './db/db.php';

if (isset($_POST['create_user'])) {

    createUser($_POST);
}

if (isset($_POST['login_submit'])) {

    login($_POST);
}

function createUser($request)
{

    try
    {
        $pdo           = pdo_connection();
        $user_name     = $request['user_name'];
        $user_login_id = $request['user_login_id'];
        $user_password = md5($request['user_password']);
        $user_category = $request['user_category'];
        if (empty($user_name) || empty($user_login_id) || empty($user_password) || empty($user_category)) {
            throw new Exception('All field are required');
        }

        // checking user id already exist

        $check = $pdo->prepare("SELECT * FROM users WHERE user_login_id = ? LIMIT 1");
        $check->execute([$user_login_id]);
        $result = $check->fetch();

        if ($result) {
            throw new Exception('User Login ID already Exist Please Try Different login id');
        }

        // creating new user
        $pdo  = pdo_connection();
        $stmt = $pdo->prepare('INSERT INTO users(user_login_id,user_name,user_password,user_category) VALUES (?, ?, ?, ?)');
        $stmt->execute([$user_login_id, $user_name, $user_password, $user_category]);
        header('location:create-user.php?success=Your Login Successfull');

    } catch (Exception $e) {
        header('location:create-user.php?error=' . $e->getMessage());
    }

}

function login($request)
{

    try {
        $user_login_id = $request['user_login_id'];
        $user_password = md5($request['user_password']);
        if (empty($user_login_id) || empty($user_password)) {
            throw new Exception('All field are required');
        }

        // retrive user  bby id and pass already exist
        $pdo   = pdo_connection();
        $check = $pdo->prepare("SELECT user_id,user_name,user_login_id,user_category FROM users WHERE user_login_id = ? AND user_password = ? LIMIT 1");
        $check->execute([$user_login_id, $user_password]);
        $result = $check->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            // var_dump($result);
            // exit();
            $_SESSION['user']          = true;
            $_SESSION['user_login_id'] = $result['user_login_id'];
            $_SESSION['user_name']     = $result['user_name'];
            $_SESSION['user_category'] = $result['user_category'];

            header('location:index.php?success=You Have Successfully Logged in');
        } else {
            throw new Exception('User login id or password not match please try again');
        }

    } catch (Exception $e) {
        header('location:login.php?error=' . $e->getMessage());
    }

}
