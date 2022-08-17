<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController{
    public function index() {
        return new Response("<h1 style='color:purple'>Article Post<h1>");
    }
}