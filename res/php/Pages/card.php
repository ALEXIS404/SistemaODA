<?php

namespace ODA\Pages;

use ODA\Modules\Extended;
use ODA\Modules\WebPage\Page;

class card extends Page
{

    /**
     * 
     * @param Extended $Extended
     */
    public function __construct(Extended $Extended = NULL)
    {
        parent::__construct($Extended, "Alexis", "pages/card.twig");
    }

    public function initVars()
    {
        $this->setVar('page.title', 'Pagina de Alexis');

        $this->setVar('nombre', "Alexis");
    }
}
