<?php

namespace Highcharts\Elements;

use JsonSerializable;

class SeriesOptions implements JsonSerializable
{
    private $states;

    public function __construct()
    {
        $this->states = new States();
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}