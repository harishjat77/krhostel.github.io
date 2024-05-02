<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
    max-width:80%;;
    background-color:gray;
    color:white;
    margin:auto;
    padding: 20px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
    <p>Your party status is here</p>
        <?php
        $age = 10;

        if($age>18){
            echo "You can go to the party";
        }
        else if($age==10){
            echo "You are 10 year old";
        }
        else{
            echo "You can't go to the party";
        } echo "<br>";

        // Arrays
        $languages = array("Python","C++", "php", "Nodejs");
        // echo $languages[0]; echo "<br>";
        echo count($languages); echo "<br>";

        // Loop in php
        $a = 0;
        while ($a <= 10) { echo "<br>";
            echo "The valu of a is :- "; 
            echo $a;
            $a++;
        }
        // Iterating arrays in php using while loop
        $a = 0;
        while ($a < count($languages)) { echo "<br>";
            echo "The valu of languages is :- "; 
            echo $languages[$a];
            $a++;
        }

        //Do while loop
        $a = 88;
        do { echo "<br>";
            echo "The valu of a is :- "; 
            echo $a;
            $a++;
        } while ($a < 10);

        //Do while loop
        for ($a=0; $a<=20 ; $a++) { echo "<br>";
            echo "The value of a from the for loop is :-";
            echo $a;
        }

        foreach ($languages as $value){
            echo "<br>  The Value from foreach loop is :- ";
            echo $value;
        } echo "<br>";

        function print5(){
            echo "FIVE";
        }
        print5();
        function print_number($number){
            echo "<br> Your Number Is :-";
            echo $number;
        }
        print_number(100);
        print_number(150);
        print_number(200);
        print_number(250);
        ?>

    </div>
</body>
</html>