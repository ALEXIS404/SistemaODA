<?php

namespace ODA\Modules\App; // PACKAGE DE JAVA 

// IMPORTAMOS LA LIBRERIA PHP 
use ODA\Modules\Extended; //Incluimos los componentes extendidos del framework
use ODA\Modules\Extended\ExtendedExtended; // incluir componentes pra heredar
use ODA\Modules\App\Temas\Database;

//crear la clase y heredamos los componentes extendidos 
class Temas extends ExtendedExtended
{
    use Database\nuevoTema;

    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended);
    }
}
