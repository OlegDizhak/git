<?php
/**
 * Class description for application class
 **/
class Application
{
    public function init()
    {
        echo "Initialize application";
    }
}

(new Application())->init();