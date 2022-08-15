<?php

// Place background inside a section or not. If inside a section:
$foo = $this->addControlSection("bar", __("Anything You Want"), "", $this);

// Background 
$foo->addPreset(
    "background",  // Name of preset from Elements API.
    "element_background", // Something unique.
    __("Item Background"), // Title visible in Oxygen Builder.
    ".my-selector"  // CSS selector to target.
)->whiteList();

?>