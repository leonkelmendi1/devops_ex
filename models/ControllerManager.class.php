<?php


class ControllerManager
{

    /**
     * @return BooksController
     */
    public static function extracted()
    {
        require_once('controllers/BooksController.php');
        $controller = new BooksController();
        return $controller;
    }

    /**
     * @return GenesisController
     */
    public static function extracted1()
    {
        require_once('controllers/GenesisController.php');
        $controller = new GenesisController();
        return $controller;
    }

    /**
     * @return ContactController
     */
    public static function extracted2()
    {
        require_once('controllers/ContactController.php');
        $controller = new ContactController();
        return $controller;
    }

    /**
     * @return HomeController
     */
    public static function extracted3()
    {
        require_once('controllers/HomeController.php');
        $controller = new HomeController();
        return $controller;
    }
}