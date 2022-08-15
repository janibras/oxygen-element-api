<?php

// You can use a standalone section or a preset to display options in Oxygen. 

// Standalone
$this->borderSection(
    __("Borders"), // Title of the section..
    ".my-selector", // CSS selector to target.
    $this
);

// Preset

    // If you want to place it in a separate section:
    $foo = $this->addControlSection("bar", __("Anything You Want"), "", $this);

// Borders 
$foo->addPreset(
    "border_api",  // Name of preset from Elements API.
    "element_border", // Something unique.
    __("Item Borders"), // Title visible in Oxygen Builder.
    ".my-selector"  // CSS selector to target.
)->whiteList();

// Border Radius
$foo->addPreset(
    "border-radius",  // Name of preset from Elements API.
    "element_radius", // Something unique.
    __("Item Border Radius"), // Title visible in Oxygen Builder.
    ".my-selector"  // CSS selector to target.
)->whiteList();

?>