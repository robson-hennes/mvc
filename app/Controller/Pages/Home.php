<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

        public static function getHome(){
            //ORGANIZAÇÃO
            $objOrganization = new Organization;          

            //VIEW DA HOME
            $title = 'MVC - Home RH';
            $content =  View::render('pages/home', [
                'name' => $objOrganization->name,
                'description' => $objOrganization->description,
                'site' => $objOrganization->site
            ]);

            //RETORNA A VIEW DA PÁGINA
            return parent::getPage($title, $content);
        }
}