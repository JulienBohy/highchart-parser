<?php

namespace Highcharts\Elements;

use JsonSerializable;

class Point implements JsonSerializable
{
    private $name;
    private $color;
    private $x;
    private $y;

    public function __construct($x, $y = null, $name = null, $color = null)
    {
        $this->x = $x;
        if (!is_null($y)) {
            $this->y = $y;
        }
        if (!empty($name)) {
            $this->name = addslashes($name);
        }
        if (!empty($color)) {
            $this->color = $color;
        }
    }

    public function jsonSerialize()
    {
        return array_filter(
            get_object_vars($this), function ($v) {
            return false !== $v && !is_null($v) && ('' != $v || '0' == $v);
        }
        );
    }
}