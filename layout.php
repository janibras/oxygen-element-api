<?php

//Flex Control
$flex = $this->addControlSection("flex", __("Layout"), "", $this); //This preset lives only in a section.
$flex->flex(
    ".my-selector", // CSS selector to target
    $this
);

?>