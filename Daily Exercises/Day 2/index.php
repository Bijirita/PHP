<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="Assets\Stylesheets\main.css">
        <link rel="stylesheet" href="Assets\Stylesheets\reset.css">
        <title>PHPDay2Excersises</title>
    </head>
    <body>
        <!--contact card-->
        <fieldset class="contactcard">
            <h1>Hello</h1>
            <legend>Contact Us</legend>
            <label> 
                First Name
                <input type="text" name="First Name" required>
            </label>
            <br>
            <label> 
                Last Name
                <input type="text" name="Last Name" required>
            </label>
            <br>
            <label> 
                Email Address
                <input type="email" name="Email Address", placeholder="Enter preferred email address">
            </label>
            <br>
            <label> 
                Phone Number
                <input type="tel" name="Email Address", placeholder="xxx-xxx-xxxx">
            </label>
            <br>
            <label>
                Preferred Method of Communication
                <input type="radio" name="comspreference" value="Email"> Email
                <input type="radio" name="comspreference" value="Phone"> Phone
            </label>
            <br>
            <label>
                Product of Interest<br>(Check all that apply) 
                <input type="checkbox" name="product" value="Apple"> Apple
                <input type="checkbox" name="product" value="Banana"> Banana
                <input type="checkbox" name="product" value="Carrot"> Carrot
                <input type="checkbox" name="product" value="Daikon"> Daikon
                <input type="checkbox" name="product" value="Eggplant"> Eggplant
                <input type="checkbox" name="product" value="Figs"> Fig
            </label>
            <br>
            <label>
                Questions/Comments
                <textarea name="question">Add your questions and/or comments here</textarea>
            </label>
            <input type="submit" name="submit" value="Send">
        </fieldset>
        <br><br>
        <!--php exercises-->
        <div class="exercises">
            <?php
            /*--Constants-------------*/
            echo nl2br ("Created a constant called 'Exercises' with a value of 'Day 2 PHP Exercises' using the defin f(x)");
            echo "<br>";
            define ("Exercises", "Day 2 PHP Exercises"); //(name of constant, value);
            echo (Exercises); //print constant to document.
            echo "<br>"; echo "<br>";

            /*--Operators--*/
            echo nl2br ("For my next trick...I'll do things with operators. \n I have +,-,*,/,%,<,>,=, and **");
            echo "<br>";
            echo "2 + 2 = ".(2 + 2);
            echo "<br>";
            echo "2 - 2 = ".(2 - 2);
            echo "<br>";
            echo "2 * 2 = ".(2 * 2);
            echo "<br>";
            echo "2 / 2 = ".(2 / 2);
            echo "<br>";
            echo ("% is the remainder operator. Useful to stick it in a f(x) to help check if a number is even or odd.");
            echo "<br>";
            echo "2 % 2 = ".(2 % 2); //this is the remainder operator.  Useful for checking if a number is even or odd.
            echo "<br>";
            echo var_dump((bool) 2 < 2)." when (2 < 2)";
            echo "<br>";
            echo var_dump((bool) 2 > 2)." when (2 > 2)";
            echo "<br>";
            echo var_dump((bool) 2 == 2)." when (2 = 2)";
            echo "<br>";
            echo var_dump((bool) 2 <= 2)." when (2 <= 2)";
            echo "<br>";
            echo var_dump((bool) 2 >= 2)." when (2 >= 2)";
            echo "<br>";
            echo " ** means exponent (2 ** 3) = ".(2 ** 3);
            echo "<br>"; echo "<br>";
            
            /*--Conditionals--*/
            echo ("Here come conditionals like if/elseif.  And some f(x). and a forloop");
            echo "<br>";
            

            for ($i = 0; $i < 5; $i++) {
                hitDaLichKing ();
                echo '<br>';
            }

            function hitDaLichKing (){
                $randNum = mt_rand(1, 20);
                if ($randNum === 20) {
                echo "You rolled a ".$randNum."! You slap the Lich King's head clean off!";
                }elseif ($randNum === 1) {
                    echo "You rolled a  ".$randNum."! You fall on your sword while trying to strike the Lich King!";
                }elseif ($randNum < 10) {
                    echo "You rolled a  ".$randNum."! The Lich King dodges your attack";
                }elseif ($randNum >= 10) {
                    echo "You rolled a  ".$randNum."! You strike the Lich King!";
                }
            }

        /* Array stuff */
        echo '<br>';    
        $arr = array ("Moraxella", "Proteus", "Pseudomonas", "Bordetella, Vibrio");
        echo ("Here is a foreach function that echos an array");
        echo '<br>';
        
        loopn($arr);

        function loopn ($arr) {
            
            foreach ($arr as $genus) {
                echo $genus.", ";
            }
        }
       
        echo '<br>';
        echo ("same thing but with a while loop set for 3 iterations.");
        echo '<br>';
        $i = 0;
        while ( $i < 3) {
            loopn($arr).", ";
            echo "<br>";
            $i++;
        }

        echo '<br>';
        echo ("Going to do array looooops and sort things next");
        echo '<br>';
        $newArr = array ("You", "have", "become", "powerful", "I", "sense", "the", "dark", "side", "in", "you");
        echo ("Counting the number of items in an indexed array with count(array)");
        echo '<br>';
        echo count($newArr);
        echo "<br>";
        echo ("going to sort through indexed array using sort(array) and rsort(array)");
        echo "<br>";
        rsort($newArr);
        echo $newArr;
        echo "<br>";
        

    

        
            

            










         
            ?>
        </div> 




        
    </body>
</html>