<?php

    spl_autoload_register("autoLoader1");

    function autoLoader1($className){
        $path = "view/";
        $extension = ".php";
        $fileName = $path.$className.$extension;

        if(!file_exists($fileName)){
            return false;
        }

        include_once($path.$className.$extension);
    }

    spl_autoload_register("autoLoader2");

    function autoLoader2($className){
        $path = "model/";
        $extension = ".php";
        $fileName = $path.$className.$extension;

        if(!file_exists($fileName)){
            return false;
        }

        include_once($path.$className.$extension);
    }

    spl_autoload_register("autoLoader3");

    function autoLoader3($className){
        $path = "controller/";
        $extension = ".php";
        $fileName = $path.$className.$extension;

        if(!file_exists($fileName)){
            return false;
        }

        include_once($path.$className.$extension);
    }

    