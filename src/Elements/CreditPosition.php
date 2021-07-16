<?php

namespace Highcharts\Elements;

use JsonSerializable;

class CreditPosition implements JsonSerializable
{
    private $x;
    private $y;
    private $align;
    private $verticalAlign;


    public function __construct($align = null, $x = null, $y = null, $verticalAlign = null)
    {
        if (!empty($align)) {
            $this->align = $align;
        }
        if (!empty($x)) {
            $this->x = $x;
        }
        if (!empty($y)) {
            $this->y = $y;
        }
        if (!empty($verticalAlign)) {
            $this->verticalAlign = $verticalAlign;
        }
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}