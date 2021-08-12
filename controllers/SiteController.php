<?php


namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = ['name' => 'Kenny'];
        return $this->render('home', $params);
    }
    public function handleContact(Request $request)
    {
        var_dump($request->getBody());
    }
    public function contact()
    {
        return $this->render('contact');
    }
}
