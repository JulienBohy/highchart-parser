<?php

namespace Highcharts\Elements;

use JsonSerializable;

class ScatterPlotOption implements JsonSerializable
{
    private $marker;

    public function setMarker($marker)
    {
        $this->marker = $marker;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}