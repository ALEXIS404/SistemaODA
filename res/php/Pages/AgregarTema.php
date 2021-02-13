<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;
use ODA\Util\Functions;
use ODA\Modules\App\Temas;

/**
 * 
 */
class AgregarTema extends Page
{

    private $Control;

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Nuevo Tema", "pages/agregar_tema.twig");
    }

    public function initVars()
    {
        $this->setVar('page.title', 'Agrega temas');
    }

    public function CheckPost()
    {
        $nombre_tema = $this->getPost('nombre_tema');
        $control = $this->Control;

        $control->nuevoTema($nombre_tema);
    }

    public function setUp()
    {
        $this->Control = new Temas($this->Extended());
    }
}
