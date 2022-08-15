<?php

// You can use a standalone section or a preset to display options in Oxygen. 

// Standalone
$this->boxShadowSection(
    __("Box Shadow"), // Title of the section.
    ".my-selector", // CSS selector to target.
    $this
);

// Preset
    // If you want to place it in a separate section:
    $foo = $this->addControlSection("bar", __("Anything You Want"), "", $this);

$foo->addPreset(
    "box-shadow",  // Name of preset from Elements API.
    "element_box_shadow", // Something unique.
    __("Item Box Shadow"), // Title visible in Oxygen Builder.
    ".my-selector"  // CSS selector to target.
)->whiteList();

?>