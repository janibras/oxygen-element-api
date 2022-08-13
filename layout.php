<?php

//Flex Control
$foo = $this->addControlSection("flex", __("Layout"), "", $this); //This preset lives only in a section.
$foo->flex(
    ".my-selector", // CSS selector to target
    $this
);

?>