<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day1</title>
</head>
<body>

    <?php 
    $hello = "Hello World!";
    $goodbye = "Goodbye World!"; 
    echo $hello;
    echo $goodbye;
   
    function localExample () {
         
        $hello = mt_rand(1, 10);
        echo $hello;
    }

    function globalExample () {
        $goodbye = mt_rand(20, 30);
        global $goodbye;
        echo $goodbye;
    }
    $myarray = array ("string in da array", "notha string in da array", "integer in da array?");
    
    class cbc4 {
        var $student = array ("Nestor Peralta Jr", "Colby", "William", "CharleRae", "Elle");
        var $age = array (28, 31, 22, 35, 21);
        var $sex = array ("Male", "Male", "Male", "Female", "Female");
    }

    $students = array ("Nestor Peralta Jr", "Colby", "William", "CharleRae", "Elle");
    $skew = new cbc4;
    echo localExample();
    echo globalExample();
    print_r($myarray, false);
    print_r($skew);
    $arrayToString = implode(", ",$students);
    echo ($arrayToString);
    $reversed = array_reverse($students);
    echo strlen($arrayToString);
    print_r ($reversed);
   
    ?>

    <?php $arrayToString = implode(", ",$students);
    echo ($arrayToString);
    $reversed = array_reverse($students);
    echo strlen($arrayToString);
    print_r ($reversed);
   
    ?>
    
    
</body>
</html> 