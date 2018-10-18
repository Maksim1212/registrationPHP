<?php
session_start();
require "db.php";


$data = $_POST;
if (isset($data['do_signup'])) {
    $errors = array();


    if (trim($data['Name']) == '') {
        $errors[] = 'Enter Name!';
    }

    if (trim($data['Surname']) == '') {
        $errors[] = 'Enter Last Name!';
    }
    if (trim($data['email']) == '') {
        $errors[] = 'Enter Email!';
    }

    if ($data['password'] == '') {
        $errors[] = 'Enter Password!';
    }

    if ($data['password_2'] != $data['password']) {
        $errors[] = 'Passwords do not match!';
    }

    if (R::count('users', "email = ? ", array($data['email']))
        > 0) {
        echo "<a href='login.php'> Signup </a> ";
        $errors[] = 'User with such email already exists !';

    }

    if (empty($errors)) {
        $user = R::dispense('users');
        $user->name = $data['Name'];
        $user->surname = $data ['Surname'];
        $user->email = $data['email'];
        $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
        $user->registrationDate = date("Y-m-d H:i:s");

        R::store($user);

            $_SESSION['logged_user'] =[
                'email' => $user->email,
                'name' => $user->name,
                'registrationDatedate' => $user->registration_date,
                'surname' => $user->surname,
            ];
        header("Location: infopage.php");
    } else {
        echo '<div style="color: #ff0000;">' . array_shift($errors) . '</div><hr>';
    }
}
?>

<form style="text-align: center" action="signup.php" method="POST">

    <body style="background: #faa152">

    <p><strong>Your First Name</strong>:
    <p>
        <input type="text" name="Name" value="<?php echo @$data['Name']; ?>">
    </p>

    <p><strong>Your Last Name</strong>:
    <p>
        <input type="text" name="Surname" value="<?php echo @$data['Surname']; ?>">
    </p>

    <p><strong>Your Email</strong>:
    <p>
        <input type="email" name="email" value="<?php echo @$data['email']; ?>">
    </p>

    <p><strong>Your Password</strong>:
    <p>
        <input type="password" name="password" value="<?php echo @$data['password']; ?>">
    </p>

    <p><strong>Confirm password</strong>:
    <p>
        <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
    </p>
    <p>
        <button style="border slategray" type="submit" name='do_signup'>Registration Now!</button>
    </p>
    </body>
</form>