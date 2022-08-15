<?php

// Place background inside a section (Not necessary.)
$foo = $this->addControlSection("bar", __("Anything You Want"), "", $this);

// Background 
$foo->addPreset(
    "background",  // Name of preset
    "menu_item_background",
    __("Item Background"), // Title visible in Oxygen Builder
    ".my-selector"  // CSS selector to target
)->whiteList();

?>