<?php

namespace Highcharts\Elements;

use Highcharts\Constants\Enabled;
use JsonSerializable;

class Hover implements JsonSerializable
{
    private $enabled;

    public function __construct()
    {
        $this->enabled = Enabled::FALSE;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}