<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP Test</title>
    </head>
    <body>

<!--Test 1        --><?php //echo '<p>Hello World</p>'; ?>
<!--Test 2        --><?php //phpinfo(); ?>
<!--        --><?php
//            echo $_SERVER['HTTP_USER_AGENT']
//        ?>

    <?php
        if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Firefox')){
    ?>
        <h3>str_contains() returned true</h3>
        <p>You are using Firefox</p>
    <?php
        } else {
    ?>
        <h3>str_contains() returned false</h3>
        <p>You are not using Firefox</p>
    <?php
        }
    ?>

    <form action="action.php" method="post">
        <label for="name">Your name:</label>
        <input name="name" id="name" type="text">

        <label for="age">Your age:</label>
        <input name="age" id="age" type="number">

        <button type="submit">Submit</button>
    </form>





    </body>

</html>