<?php
namespace App\Core;

use Carbon\Carbon;

class BaseController
{
    public function render($view, $data = [])
    {
        Carbon::setLocale('tr');
        $data['Carbon'] = new Carbon();

        extract($data); # viewa değer gönderdiğimizde data değeri içindekileri göndermemizi sağlar.django da ki context yapısı gibi

        require __DIR__ . "/../../views/layouts/header.php";
        require __DIR__ . "/../../views/$view.php";

        require __DIR__ . "/../../views/layouts/footer.php";
    }
}


?>
