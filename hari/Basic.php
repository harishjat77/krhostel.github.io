<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <div class="container" >
        This is a my first php website <br>
        <?php
        define('PI', 3.14);
        echo"Hello Word and this is printed using php"; echo "<br>";
        /*
        multiline 
        comments
        */
        // single line commnet

        $variable1=4;
        $variable2=2;
        echo $variable1;echo "<br>";
        echo $variable2;echo "<br>";

        // Operator in PHP

        //Arithmetic operator
        echo"The value of variable1 + variable2 is =";
         echo $variable1 + $variable2; echo "<br>";
        echo"The value of variable1 - variable2 is =";
         echo $variable1 - $variable2; echo "<br>";
        echo"The value of variable1 * variable2 is =";
         echo $variable1 * $variable2; echo "<br>";
        echo"The value of variable1 / variable2 is =";
         echo $variable1 / $variable2; echo "<br>";

        //Assignment Operator
        $newVar = $variable1;
        // $newVar +=2;
        // $newVar -=2;
        // $newVar *=2;
        $newVar /=2;
        echo "The value of new variable is =";
        echo $newVar;   echo "<br>";

        //Comparison Operators
        // echo "<h1> Comparison Operator </h1>";
        echo "The value of 1==4 is =";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1<=4 is =";
        echo var_dump(1<=4);
        echo "<br>";

        echo "The value of 1>=4 is =";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<4 is =";
        echo var_dump(1<4);
        echo "<br>";

        echo "The value of 1>4 is =";
        echo var_dump(1>4);
        echo "<br>";

        echo "The value of 1!=4 is =";
        echo var_dump(1!=4);
        echo "<br>";

        //Increment/Decrement Operator
        // echo $variable1++; echo "<br>";
        // echo $variable1
        // echo $variable1--; echo "<br>";
        // echo $variable1
        // echo ++$variable1; echo "<br>";
        // echo $variable1
        echo --$variable1; echo "<br>";
        echo $variable1;

        //Logical Operator
        // and(&&)
        // or(||)
        // xor
        // not(!)
        
        //   $myVar = (true and true);
        //   $myVar = (false and true);
        //   $myVar = (false and false);
        //   $myVar = (true and false);

        //   $myVar = (true or false);

        //   $myVar = (true xor true);
        //   $myVar = (false xor true);
        //   $myVar = (false xor false);
          $myVar = (true xor false);
          echo var_dump($myVar); echo "<br>";


        ?>

        <?php
        // Data Types in php
        // 1.String
        // 2.Integers
        // 3.Float
        // 4.Boolean
        // 5.Array
        // 6.Object
        echo "Data Types"; echo "<br>";

        $var = "this is a string";
        echo var_dump($var); echo "<br>";

        $var = 9116087897;
        echo var_dump($var);echo "<br>";

        $var = 911608.7897;
        echo var_dump($var);echo "<br>";

        $var = true;
        echo var_dump($var);echo "<br>";

        echo PI;
        


        ?>
    </div>
</body>
</html>