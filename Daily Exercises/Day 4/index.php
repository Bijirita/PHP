<?php
    //Starting a session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo ("Here I create a file called example.txt, write 'try this fgetc, close it, reopen it <br> echo each character, then close");
            $file = fopen("example.txt","w");
            fwrite ($file, "try this fgetc");
            fclose ($file);
            $fileGet = fopen("example.txt", "r");
            echo "<br>";
            while (! feof ($fileGet)) {
                echo fgetc($fileGet);
            }

            fclose($fileGet);
        ?>
    <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h1>Please fill out this form</h1>
        <label> 
            First Name
            <input type="text" name="First-Name" required>
            <?php
                echo "<br>"; echo "<br>";
                $cookie_FirstName = "First_Name";
                $cookie_FirstNameValue = ($_POST["First-Name"]);
                echo "<br>"; echo "<br>";
                setcookie($cookie_FirstName, $cookie_FirstNameValue, time () + (86400 * 30), "/");
            ?>
            <?php
            // Test for POST submission
            // Test for COOKIE set
                if (!isset($cookie_FirstNameValue)) {
                    echo "Your cookie name " . $cookie_FirstName . " is not set.";
                } else {
                    echo "Your cookie is set " . $cookie_FirstName . "   " .$cookie_FirstNameValue;
                }
            ?>
        </label>
    

        <?php

        //---------------------------session--------------------------------//
            echo "<br>" ; echo "<br>";echo "<br>" ; echo "<br>";
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "<b>Session variables are set.</b>";
            echo "<br>" ; echo "<br>";
            echo "<b>Going to display session variables</b>";
            echo "<br>";
            print_r ($_SESSION);
            echo "<br>" ; echo "<br>";
            echo "<b>overwriting favcolor</b>";
            echo "<br>";
            $_SESSION["favcolor"] = "blue";
            print_r ($_SESSION);
            echo "<br>";echo "<br>";
            echo "<b>removing session variables</b>";
            echo "<br>";
            session_unset();
            print_r ($_SESSION);
            echo "<br>"; echo "<br>";
            echo "an individual session value cannot be removed with session unset, as it <b>only</b> removes all variables. <br> So, the following <b>will</b> break.";
            session_unset($_SESSION["favcolor"]);
            echo "<br>"; echo "<br>";
            echo "<b>COOL!</b>";
        ?>
    </body>
</html>