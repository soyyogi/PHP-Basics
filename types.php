<h4><a href="index.php">Return</a></h4>
<?php
echo '<h1>Data Types</h1>';
echo '
<h3>Boolean</h3>
<p>A Boolean represents two possible states: TRUE or FALSE.</p>
<pre>
$x = true;
var_dump($x);  //var_dump() returns data type and value
</pre>
';
$x = true;
var_dump($x);


echo '
<h3>Integer</h3>
<pre>
$x = 5985;
var_dump($x);
</pre>
';
$x = 5985;
var_dump($x);



echo '
<h3>Float</h3>
<pre>
$x = 5.252513;
var_dump($x);
</pre>
';
$x = 5.252513;
var_dump($x);



echo '
<h3>String</h3>
<pre>
$x = \'Hello world!\';
echo $x;
</pre>
';
$x = 'Hello world!';
echo $x;




echo '
<h3>Array</h3>
<pre>
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
</pre>
';
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);



echo '
<h3>Object</h3>
<pre>
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "&lt;br&gt;";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
</pre>
';
class Car {
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar->message();



echo '
<h3>NULL</h3>
<pre>
$x = "Hello world!";
$x = null;
var_dump($x);
</pre>
';
$x = "Hello world!";
$x = null;
var_dump($x);

echo '
<h3></h3>
<pre>

</pre>
';
