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
//---------Simply setting 2 global variables then printing to document----//
    $hello = "Hello World!";
    $goodbye = "Goodbye World!"; 
    echo $hello;
    echo $goodbye;
    //--this is a line break--//
    echo "<br>"; echo "<br>";
    
//---Created two functions to play with scope---------------//
    function localExample () {
        //$hello exists local to f(x) localExample//
        $hello = mt_rand(1, 10);
        echo $hello;
    }

    function globalExample () {
        //--$goodbye is now a global, as we declared global, any $goodbye
        //--beyond this will be mt_rand(20,30);
        global $goodbye;
        $goodbye = mt_rand(20, 30);
        echo $goodbye;
    }
    //---called local/globalExample() then printed to document--------//
    echo nl2br ('The following are examples of local and global scope.'); 
    echo "<br>"; echo "<br>";
    
    echo ('A random number local to the function localExample + the Global $hello.');
    echo "<br>";
    echo localExample();
    echo " $hello";
    echo "<br>";

    echo nl2br ('Then the global $goodbye that has been changed to a random number in function globalExample.');
    echo "<br>";

    echo globalExample();
    echo " $goodbye";
    echo "<br>"; echo "<br>";

    echo nl2br ('The following examples are array creation and manipulations.');
    echo "<br>"; echo "<br>";

    //----Created arrays to play with------------------------------------/
    $myarray = array ("string in da array", "notha string in da array", "integer in da array?", 2);
    $students = array ("Nestor Peralta Jr", "Colby", "William", "CharleRae", "Elle");
    
    //----var_dump of $myarray-----------//
    echo nl2br ('This is a var_dump of $myarray.');
    echo "<br>";
    var_dump($myarray);
    echo "<br>"; echo "<br>";
    
    //----------------manipulating $students------------------------------------/
    echo nl2br ('Here we used implode(", ", $students) to turn the array $students into a string.');
    $arrayToString = implode(", ",$students); //$students is now a string.//
    echo "<br>";

    echo ($arrayToString); //printed $arrayToString to document.//
    echo "<br>"; echo "<br>";

    echo nl2br ('Then we used strlen() on the array $arrayToString to count the length.');
    echo "<br>";

    echo strlen($arrayToString); //counts the length of the string $arrayToString.//
    echo "<br>";

    echo nl2br ('We also reversed the string using strrev().');
    echo "<br>";

    echo strrev ($arrayToString); //prints to document the reverse of string $arrayToString.// 
    echo "<br>"; echo "<br>"; echo "<br>";

//----------------------Created an Object class cbc4 and instantiated it--------------------///
    class cbc4 {
        var $student = array ("Nestor Peralta Jr", "Colby", "William", "CharleRae", "Elle");
        var $age = array (28, 31, 22, 35, 21);
        var $sex = array ("Male", "Male", "Male", "Female", "Female");
    }

    $instantiate = new cbc4;
    echo nl2br ('We created an object called cbc4, instantiated it, then printed to document');
    echo "<br>";
    print_r($instantiate); //--Printed the object to the document//
    ?>

</body>
</html> 