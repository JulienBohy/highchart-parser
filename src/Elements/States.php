<?php

namespace Highcharts\Elements;

use JsonSerializable;

class States implements JsonSerializable
{
    private $hover;

    public function __construct()
    {
        $this->hover = new Hover();
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}