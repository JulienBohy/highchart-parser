<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Highcharts\Elements;

use JsonSerializable;



/**
 * Description of Marker.
 *
 * @author BOJU
 */
class Marker implements JsonSerializable
{
    private $enabled;
    private $symbol;
    private $lineColor;
    private $fillColor;
    private $lineWidth;
    private $height = 7;
    private $width = 7;

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setLineColor($lineColor)
    {
        $this->lineColor = $lineColor;
    }

    public function setFillColor($fillColor)
    {
        $this->fillColor = $fillColor;
    }

    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;
    }

    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    public function setEnabled($enabled)
    {
        //var_dump($enabled);exit;
        $this->enabled = $enabled;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
