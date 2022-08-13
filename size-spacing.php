<?php

// Place padding & margin inside a section 
$foo = $this->addControlSection("bar", __("Anything You Want"), "", $this);

// Padding 
$foo->addPreset(
    "padding",  // Name of preset
    "menu_item_padding",
    __("Item Padding"), // Title visible in Oxygen Builder
    ".my-selector"  // CSS selector to target
)->whiteList();

// Margin 
$foo->addPreset(
    "margin",  // Name of preset
    "menu_item_margin",
    __("Item Margin"), // Title visible in Oxygen Builder
    ".my-selector" // CSS selector to target
)->whiteList();

// Width (min, max.)

// Height (min, max.)

?>