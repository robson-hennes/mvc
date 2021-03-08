<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

    /**
     * Método responsável por rendereizar o topo da página.
     * @return string
     */

    public static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     * Método responsável por rendereizar o rodapé da página.
     * @return string
     */

    public static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página genérica
     * @return string
     */

    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'header'  => self::getHeader(),
            'title'   => $title,            
            'content' => $content,
            'footer'  => self::getFooter(),
        ]);
    }
}
