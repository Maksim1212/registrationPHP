<?php
session_start();
require "db.php";
$data = $_POST;
if( isset($data['do_login']))
{
    $errors = array();
    $user = R::findOne('users','email = ?', array($data['Email']));
    if($user)
    {
        if (password_verify($data['password'], $user->password))
        {
            $_SESSION['logged_user'] =[
            'email' => $user->email,
            'name' => $user->name,
            'registrationDatedate' => $user->registration_date,
            'surname' => $user->surname,
        ];

            header("Location: infopage.php"); exit;

        } else
        {
            $errors[] = 'The data entered does not match the existing ones in the database';
        }
    }
    else
    {
        $errors[] = 'User with this Email was not found';
    }
    if( ! empty($errors))
    {

        echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
    }
}

?>

<form style="text-align: center" action="login.php" method="POST">
<body style="background: #faa152">
    <p>
    <p><strong>Your login</strong>:</p>
    <input  type="text" name="Email" value="<?php echo @$data['Email']; ?>">
    </p>

    <p>
    <p><strong>Your password</strong>:</p>
    <input  center" type="password" name="password" value="<?php echo @$data['password']; ?>">
    </p>

    <p>
        <button style="background: red" center" type="submit" name='do_login'>Login!</button>
    </p>
</body>
</form>