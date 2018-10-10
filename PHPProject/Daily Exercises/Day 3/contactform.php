<?php
        //--defining my variables--// 

            $nameFirst = $nameLast = $email = $phone = $website = "";
            $nameFirstERR = $nameLastERR = $emailERR = $phoneERR = $websiteERR = "";
            $urlRegex = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
            

            

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
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailERR = "Invalid email";
                    }
                }
                //-------------Phone validation----------------------//
                    //------Checking for no entry------------//
                if (empty($_POST["Phone"])) {
                    $phone = "Phone number is required";
                } else {
                    //-----checking for regexer phone-----//
                    $phone = test_input($_POST["Phone"]);
                    if (!preg_match('/^(\+[0-9]{1,3}|0)[0-9]{3}( ){0,1}[0-9]{7,8}\b/m', $phone)) {
                        $phoneERR = "Invalid phone number";
                    }
                }
                //------------url validation--------------------//
                    //--------checking for no entry---------//
                if (empty($_POST["website"])) {
                    $website = "website is required";
                } else {
                    //-----checking for regexer website-----//
                    $website = test_input($_POST["website"]);
                    if (!preg_match($urlRegex, $website)) {
                        $websiteERR = "Invalid website";
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
                            echo $emailERR;
                            }
                        ?>
                    </span>
                </label>
                <br><br>
                <label> 
                    Phone Number
                    <input type="tel" name="Phone", placeholder="xxxxxxxxxx" required>
                    <span class="error"> 
                        <?php
                             if(isset($_POST["Phone"])) {
                            echo $phoneERR;
                            }
                        ?>
                    </span>
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
                <br><br>
                <label> 
                    Enter a random url
                    <input type="text" name="website", placeholder="https://www.url.domain" required>
                    <span class="error"> 
                        <?php
                             if(isset($_POST["website"])) {
                            echo $websiteERR;
                            }
                        ?>
                    </span>
                </label>
                <br><br>
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
            echo "<br>";
            echo ("phone = ");
            echo test_input ($phone);
            echo "<br>";
            echo ("website = ");
            echo test_input ($website);
            echo "<br>"; echo "<br>";

            //----------------multidimensional arrays--------------//
            echo ("playing with mulidimensional arrays");
            echo "<br>"; echo "<br>";

            echo ("var_dump of array");               
            $cars = array (
                array ("Toyota", "Camry", 222000 . " miles"),
                array ("Honda", "Civic", 1000 . " miles"),
                array ("Toyota", "Camry", 10 . " miles")
            );
            
            print_r ($cars);
            echo "<br>"; echo "<br>";

            for ($row = 0; $row < 4; $row++) {
                echo "<p>Row number $row</p>";
                echo "<ul>";
                for ($col = 0; $col < 3; $col++) {
                    echo "<li>".$cars[$row][$col]."</li>";
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>