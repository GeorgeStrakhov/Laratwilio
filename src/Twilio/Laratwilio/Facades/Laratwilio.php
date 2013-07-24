<?php namespace Twilio\Laratwilio\Facades;

use Illuminate\Support\Facades\Facade;

class Laratwilio extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'laratwilio'; }

}