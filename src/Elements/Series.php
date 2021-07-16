<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Highcharts\Elements;

use Highcharts\Constants\Enabled;
use Highcharts\Constants\serieType;
use Highcharts\Constants\Symbol;
use JsonSerializable;



/**
 * Description of Series.
 *
 * @author BOJU
 */
class Series implements JsonSerializable
{
    private $name;
    private $color;
    private $type;
    private $lineWidth;
    private $lineColor;
    private $dashStyle;
    private $enableMouseTracking;
    private $showInLegend;
    private $marker;
    private $animation;
    private $pointStart;
    private $data;

    public function __construct()
    {
        $this->type = serieType::LINE;
        $this->enableMouseTracking = Enabled::TRUE;
        $this->showInLegend = Enabled::TRUE;
        $this->marker = new Marker();
        $this->marker->setEnabled(Enabled::FALSE);
        $this->marker->setSymbol(Symbol::DIAMOND);
        $this->lineColor = 'gray';
        $this->color = 'gray';
        $this->lineWidth = '2';
        //$this->animation = Enabled::FALSE;
        //$this->enableMouseTracking = false;
    }

    public function setAnimation($animation)
    {
        $this->animation = $animation;
    }

    public function setName($name)
    {
        $this->name = addslashes($name);
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setDashStyle($dashStyle)
    {
        $this->dashStyle = $dashStyle;
    }

    public function addDatas($data)
    {
        $this->data = $data;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setLineWidth($lineWidth)
    {
        $this->lineWidth = $lineWidth;
    }

    public function setShowInLegend($showInLegend)
    {
        $this->showInLegend = $showInLegend;
    }

    public function setPointStart($pointStart)
    {
        $this->pointStart = $pointStart;
    }

    public function setMarker($marker)
    {
        $this->marker = $marker;
    }

    public function setLineColor($lineColor)
    {
        $this->lineColor = $lineColor;
    }

    public function setEnableMouseTracking($enableMouseTracking)
    {
        $this->enableMouseTracking = $enableMouseTracking;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
