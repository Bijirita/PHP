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
            <label> 
                Last Name
                <input type="text" name="Last Name" required>
            </label>
            <label> 
                Email Address
                <input type="email" name="Email Address", placeholder="Enter preferred email address">
            </label>
            <label> 
                Phone Number
                <input type="tel" name="Email Address", placeholder="xxx-xxx-xxxx">
            </label>
            <label>
                Preferred Method of Communication
                <input type="radio" name="comspreference" value="Email"> Email
                <input type="radio" name="comspreference" value="Phone"> Phone
            </label>
            <label>
                Product of Interest<br>(Check all that apply) 
                <input type="checkbox" name="product" value="Apple"> Apple
                <input type="checkbox" name="product" value="Banana"> Banana
                <input type="checkbox" name="product" value="Carrot"> Carrot
                <input type="checkbox" name="product" value="Daikon"> Daikon
                <input type="checkbox" name="product" value="Eggplant"> Eggplant
                <input type="checkbox" name="product" value="Figs"> Fig
            </label>
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
          








         
            ?>
        </div> 




        
    </body>
</html>