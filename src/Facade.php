<?php

namespace VictoRD11\Transliterate;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * Class Facade.
 *
 * @author Eugene Dzhumak <elforastero@ya.ru>
 */
class Facade extends BaseFacade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'Transliterate';
    }
}
