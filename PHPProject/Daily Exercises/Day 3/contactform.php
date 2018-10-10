<?php
        //--defining my variables--// 

            $nameFirst = $nameLast = $email = "";
            $nameFirstERR = $nameLastERR = $emailERR = "";
            $emailRegex = '/[a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g';
            

        //-------------------------------validations------------------------------------------//

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               //----------First-Name Validation-----------// 
                //-------check for no entry-------//
                if (empty($_POST["First-Name"])) {
                    $nameFirstERR = "First Name is required";
                } else {
                    //--checking for anything that is not letters or spaces.--//
                    $nameFirst = test_input($_POST["First-Name"]);
                    if (!preg_match('/^[a-zA-Z ]*$/', $nameFirst)) {
                        $nameFirstERR = "Letters and spaces only. ";
                    }
                }
                //----------Last-Name Validation-------------//
                    //---------check for no entry---------//
                if (empty($_POST["Last-Name"])) {
                    $nameLastERR = "First Name is required";
                } else {
                    //--checking for anything that is not letters or spaces.--//
                    $nameLast = test_input($_POST["Last-Name"]);
                    if (!preg_match('/^[a-zA-Z ]*$/', $nameLast)) {
                        $nameLastERR = "Letters and spaces only. ";
                    }
                }
                //-------------Email Validation-----------------//
                    //------Check for no entry--------------//
                if (empty($_POST["Email"])) {
                    $email = "Email address is required";
                } else {
                    //-----checking for RFC2822 Validation-----//
                    $email = test_input($_POST["Email"]);
                    if (!preg_match('$emailRegex', $email)) {
                        $emailERR = "Invalid email";
                    }
                }
                //-------------Phone validation----------------------//
                    //------Checking for 
                if (empty($_POST["Email"])) {
                    $email = "Email address is required";
                } else {
                    //-----checking for regexer email-----//
                    $email = test_input($_POST["Email"]);
                    if (!preg_match('/^[a-zA-Z ]*$/', $email)) {
                        $emailERR = "Invalid email";
                    }
                }
            }
        
            //sanitization function//
            function test_input($input){
                //--remove whitespace from sides of string--//
                $input = trim($input);
                //--remove slashes from string--//
                $input = stripslashes ($input);
                //--convers &, ", ', >, and < to inert characters--//
                $input = htmlspecialchars ($input);
                return $input;
            }
        //-----------------------ECHOS test_inputs at the bottom of this document--------------//
           
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>form</title>
        <style> .error {color: #FF0000;}</style>
    </head>
    <body>
        

        <fieldset class="contactcard">
            <legend>Contact Us</legend>
            <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h1>Please fill out this form</h1>
                
                <label> 
                    First Name
                    <input type="text" name="First-Name" required>
                    <span class="error"> 
                        <?php
                             if(isset($_POST["First-Name"])) {
                            echo $nameFirstERR;
                            }
                        ?>
                    </span>
                </label>
                <br><br>
                <label> 
                    Last Name
                    <input type="text" name="Last-Name" required>
                    <span class="error"> 
                        <?php
                             if(isset($_POST["Last-Name"])) {
                            echo $nameLastERR;
                            }
                        ?>
                    </span>
                </label>
                <br><br>
                    <label> 
                        Email Address
                    <input type="email" name="Email", placeholder="Enter email address" required>
                    <span class="error"> 
                        <?php
                             if(isset($_POST["Email"])) {
                            echo $email;
                            }
                        ?>
                    </span>
                </label>
                <br><br>
                <label> 
                    Phone Number
                    <input type="tel" name="Phone", placeholder="xxxxxxxxxx" required>
                </label>
                <br><br>
                <label>
                    Preferred Method of Communication
                    <input type="radio" name="comspreference" value="Email"> Email
                    <input type="radio" name="comspreference" value="Phone"> Phone
                </label>
                <br><br>
                <label>
                    Product of Interest<br>(Check all that apply) 
                    <input type="checkbox" name="product" value="Apple"> Apple
                    <input type="checkbox" name="product" value="Banana"> Banana
                    <input type="checkbox" name="product" value="Carrot"> Carrot
                    <input type="checkbox" name="product" value="Daikon"> Daikon
                    <input type="checkbox" name="product" value="Eggplant"> Eggplant
                    <input type="checkbox" name="product" value="Figs"> Fig
                </label>
                <br><br>
                <label>
                    Questions/Comments
                    <textarea name="question">Add your questions and/or comments here</textarea>
                </label>
                <input type="submit" name="submit" value="Send">
            </form>
        </fieldset>
        <br><br>
        <?php
            echo ("first name = "); 
            echo test_input ($nameFirst);
            echo "<br>";
            echo ("last name = ");
            echo test_input ($nameLast);
            echo "<br>";
            echo ("email = ");
            echo test_input ($email);
        ?>
    </body>
</html>