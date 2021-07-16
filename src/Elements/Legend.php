<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Highcharts\Elements;

use JsonSerializable;


/**
 * Description of Legend.
 *
 * @author BOJU
 */
class Legend implements JsonSerializable
{
    private $enabled;
    private $layout;
    private $align;
    private $verticalAlign;
    private $x;
    private $y;
    private $borderRadius;
    private $width;
    private $itemDistance;
    private $symbolHeight;
    private $symbolWidth;
    private $symbolRadius;

    public function setItemDistance($itemDistance)
    {
        $this->itemDistance = $itemDistance;
    }

    public function setSymbolHeight($symbolHeight)
    {
        $this->symbolHeight = $symbolHeight;
    }

    public function setSymbolWidth($symbolWidth)
    {
        $this->symbolWidth = $symbolWidth;
    }

    public function setSymbolRadius($symbolRadius)
    {
        $this->symbolRadius = $symbolRadius;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setAlign($align)
    {
        $this->align = $align;
    }

    public function setVerticalAlign($verticalAlign)
    {
        $this->verticalAlign = $verticalAlign;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setBorderRadius($borderRadius)
    {
        $this->borderRadius = $borderRadius;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
