<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Highcharts\Elements;

use JsonSerializable;


/**
 * Description of plot.
 *
 * @author BOJU
 */
class PlotLine implements JsonSerializable
{
    private $color;
    private $width;
    private $value;
    private $id;
    private $dashStyle;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDashStyle($dashStyle)
    {
        $this->dashStyle = $dashStyle;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
