<?php

namespace EnergielabelPlugin\Providers;

use Plenty\Plugin\Templates\Twig;

class ContentProvider
{
    public function call(Twig $twig)
    {
        return $twig->render('EnergielabelPlugin::EnergielabelContent');
    }
}