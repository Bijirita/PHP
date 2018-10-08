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
    
    $cbc4 = new stdClass;
    $cbc4->student = 'Nestor Peralta';
    $cbc4->age = 28;
    $cbc4->sex = "Male";

    echo localExample();
    echo globalExample();
    print_r($myarray, false);
    echo strrev(

        
    )
    ?>

    
    
</body>
</html> 