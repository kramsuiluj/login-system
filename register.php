<?php 

require_once 'includes/temps.php';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    
    <main>

        <section>
            <form action="register.php" method="POST" id="reg-form">
                <?php formSection('username', 'Username', 'text', 'username', 'username'); ?>
                <?php formSection('email', 'Email', 'text', 'email', 'email'); ?>
                <?php formSection('contact', 'Contact Number', 'text', 'contact', 'contact'); ?>
                <?php formSection('pass', 'Password', 'password', 'pass', 'pass'); ?>
                <?php formSection('cpass', 'Confirm Password', 'password', 'pass', 'pass'); ?>
                <?php formBtnSection('reg-form', 'register', 'Register'); ?>
            </form>
        </section>

    </main>

</body>
</html>