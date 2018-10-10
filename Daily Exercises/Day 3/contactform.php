<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>

    <!--contact card-->
    
        <fieldset class="contactcard">
        
    <body>
            <legend>Contact Us</legend>
            <form method="post" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        

                <h1>Please fill out this form</h1>
                
                <label> 
                    First Name
                    <input type="text" name="First-Name" required>
                </label>
                <br><br>
                <label> 
                    Last Name
                    <input type="text" name="Last-Name" required>
                </label>
                <br><br>
                <label> 
                    Email Address
                    <input type="email" name="Email", placeholder="Enter preferred email address" required>
                </label>
                <br><br>
                <label> 
                    Phone Number
                    <input type="tel" name="Phone", placeholder="xxx-xxx-xxxx" required>
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
        <?php 

        
        ?>
        
    </body>
</html>