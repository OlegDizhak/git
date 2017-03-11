<?php
/**
 * Class description for application class
 * Class is the main entry point in project
 **/
class Application
{
    public function init()
    {
        echo "Initialize application";
    }
}

(new Application())->init();