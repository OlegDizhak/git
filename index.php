<?php

class Application
{
    public function init()
    {
        echo "Initialize application";
    }
}

(new Application())->init();