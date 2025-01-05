<?php 

class HomeControlller
{
    public function showHomePage()
    {
        require_once APP_VIEWS . "home.php";
    }

    public function showformsPage()
    {
        require_once APP_VIEWS . "forms.php";
    }

    
}