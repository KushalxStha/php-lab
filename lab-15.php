<!-- Create a class named "Bird". Also, create two objects pigeon and crow. Display their colors, habitats and what they eat. -->

<?php
class Bird {
    public $name;
    public $color;
    public $habitat;
    public $diet;

    public function __construct($name, $color, $habitat, $diet) {
        $this->name = $name;
        $this->color = $color;
        $this->habitat = $habitat;
        $this->diet = $diet;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Habitat: " . $this->habitat . "<br>";
        echo "Diet: " . $this->diet . "<br>";
    }
}

// Create objects
$pigeon = new Bird("Pigeon", "Gray", "Urban areas", "Seeds and crumbs");
$crow = new Bird("Crow", "Black", "Various habitats", "Insects, carrion, and small animals");

// Display information
echo "Pigeon:<br>";
$pigeon->displayInfo();
echo "<br>";

echo "Crow:<br>";
$crow->displayInfo();
?>
