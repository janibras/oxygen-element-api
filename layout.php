<?php

// You should place these options in a section. 

//Flex Control
$foo = $this->addControlSection("flex", __("Layout"), "", $this);

$foo->flex(
    ".my-selector", // CSS selector to target
    $this
);

?>