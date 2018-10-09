<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets\Stylesheets\main.css">
    <link rel="stylesheet" href="Assets\Stylesheets\reset.css">
    <title>PHPProject</title>
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
</body>
</html>