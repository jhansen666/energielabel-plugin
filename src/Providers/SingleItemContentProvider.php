<?php

namespace Energieeffizienzlabel\Providers;

use Plenty\Plugin\Templates\Twig;

class SingleItemContentProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('Energieeffizienzlabel::Item.EnergielabelItem');
    }
}