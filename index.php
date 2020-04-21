<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Translation\Loader\XliffFileLoader;
use Symfony\Component\Translation\Translator;

// Initialize the translation
$translator = new Translator('fr_FR');

// Add the XLIFF loader
$loader = new XliffFileLoader();
$translator->addLoader('xlif', $loader);

// Add resources for the loader
$translator->addResource('xlif', __DIR__.'/translations/messages.fr.xlif', 'fr_FR', 'messages');
$translator->addResource('xlif', __DIR__.'/translations/messages.es.xlif', 'es_ES', 'messages');

// Use the translator
echo $translator->trans('your_translation', [], 'messages', 'fr_FR')."\n";
echo $translator->trans('your_translation', [], 'messages', 'es_ES')."\n";
