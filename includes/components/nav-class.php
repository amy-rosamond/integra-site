<?php

// include('variables.php');

?>
<?php

class NavItem {
    public $icon;
    public $href;
    public $name;
    public $id;

    public function __construct($icon, $href, $name, $id)
    {
        $this->icon = $icon;
        $this->href = $href;
        $this->name = $name;
        $this->id = $id;
    }

    // public function __destruct()
    // {
    //     // echo '<a id="' . $this->id . '" href="' . $this->href . '">' . $this->icon . ' <span>' . $this->name . '</span></a>';
    //     echo "<a id='{$this->id}' href='{$this->href}'> {$this->icon} {$this->name}</a> \n";
    //     // "Name: " . $this->name . ". Color: " . $this->color .".<br>";
    //     // echo "<a id='$this->id' href='$this->href'>$this->icon $this->name</a> \n";
    // }

    public function get_details()
    {
        echo '<a id="' . $this->id . '" href="' . $this->href . '">' . $this->icon . ' ' . $this->name . '</a>';
    }
}

?>