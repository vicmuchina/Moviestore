<!DOCTYPE html>
<html>
<head>
     <title>first PHP</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
       integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/styles2.css">


</head>
<body >
<div class="jumbotron jumbutron-fluid ">
    <div class="container">
        <form>
            <div class="row text-center">
               <div class="col-4">
                <div class="formgroup">
                  <a href="#" class="btn btn-info btn-lg btn-" role="button">Login</a>

               </div>
               </div>
            <div class="col-4">
            <div class="formgroup">
            <a href="#" class="btn btn-success btn-lg" role="button">Sign up</a>

            </div>
            </div>
            <div class="col">
            <div class="formgroup">
            <a href="#" class="btn btn-warning btn-lg" role="button">Forgot pass</a>

            </div>
            </div>



            </div>
        </form>





<?php
$a=7;
$b=10;

$c=$a;
$a=$b;
$b=$c;

echo "$a";
echo "<br>";
echo "$b";






$a=7;
$b=10;

#swapping

$a=$a+$b;

$b=$a-$b;
$a=$a-$b;


echo "<br>";
echo "$a";
echo "<br>";
echo "$b";
echo "<br>";



for ($y=0; $y <= 4; $y++) { 
	# code...

for ($i=0; $i <= 4; $i++) { 
	# code...
	echo "*";
}
echo "<br>";

}

?>
    </div>
</div>














</body>




</html>