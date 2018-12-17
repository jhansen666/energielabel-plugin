<?php

namespace Energieeffizienzlabel\Providers;

use Plenty\Plugin\Templates\Twig;

class CategoryItemContentProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('Energieeffizienzlabel::Category.EnergielabelCategory');
    }
}