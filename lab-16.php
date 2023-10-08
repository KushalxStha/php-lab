<!-- Give an example of paramaterized constructor in PHP -->

<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

// Create an object with a parameterized constructor
$person1 = new Person("Kushal", 22);

// Display the person's information
$person1->displayInfo();
?>
