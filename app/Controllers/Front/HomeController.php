<?php
namespace App\Controllers\Front;
use App\Core\BaseController;

class HomeController extends BaseController{
    public function index(){
        $title = "Anasayfa";
        $content = "MVC Eğitimine Hoşgeldiniz";
        $this->render('front/home', ['title' => $title, 'content' => $content]);
    }
}


?>