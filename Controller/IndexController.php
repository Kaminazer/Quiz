<?php
namespace Controller;
use Model\Result;

require_once __DIR__."/../Model/Result.php";
class IndexController
{
    public function index () {
        $result = new Result();
        $results = $result->getResult();
        include __DIR__ . '/../View/main-page.php';
    }
}