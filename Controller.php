<?php

namespace Themes\Amber {

    class Controller extends \Idno\Common\Theme
    {
        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'amber', dirname(__FILE__) . '/languages/'
                )
            );
        }
    }

}

