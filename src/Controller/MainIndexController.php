<?php

declare(strict_types = 1);

namespace Controller;

use Framework\BaseController;
use Symfony\Component\HttpFoundation\Response;

class MainIndexController extends BaseController
{
    /**
     * Главная страница
     * @return Response
     */
    public function action(): Response
    {
        return $this->render('main/index.html.php');
    }
}
