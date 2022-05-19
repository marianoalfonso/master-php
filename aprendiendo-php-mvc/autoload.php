<?php

    function autoLoad($className) {
        include 'controllers/'.$className.'.php';
    }

    spl_autoload_register('autoLoad');