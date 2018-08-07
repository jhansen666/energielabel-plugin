<?php

namespace Energieeffizienzlabel\Providers;

use Plenty\Plugin\Templates\Twig;

class ContentProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('Energieeffizienzlabel::EnergielabelContent');
    }
}