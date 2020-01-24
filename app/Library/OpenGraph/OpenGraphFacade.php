<?php

namespace App\Library\OpenGraph;

class OpenGraphFacade extends  \Illuminate\Support\Facades\Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { 
        return 'App\Library\OpenGraph\OpenGraph'; 
    }
}