<?php
namespace App\Controllers\Front;
use App\Core\BaseController;

class ExampleController extends BaseController{
    public function index(){
        $title = "Örnek Sayfa";
        $content = "örnek sayfa olması için oluşturulmuştur";
        $this->render('front/example', ['title' => $title, 'content' => $content]);
    }
}


?>