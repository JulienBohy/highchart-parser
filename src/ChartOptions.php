<?php

namespace Highcharts;

use JsonSerializable;
require '../vendor/autoload.php';
class ChartOptions implements JsonSerializable
{
    private $type;
    private $width;
    private $height;
    private $renderTo;
    private $margin;
    private $spacingLeft;

    public function setMargin($margin)
    {
        $this->margin = $margin;
    }

    public function setSpacingLeft($spacingLeft)
    {
        $this->spacingLeft = $spacingLeft;
    }

    public function setRenderTo($renderTo)
    {
        $this->renderTo = $renderTo;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}