<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Highcharts\Elements;


use JsonSerializable;
use function array_filter;
use function is_null;

/**
 * Description of Datas.
 *
 * @author BOJU
 */
class Datas implements JsonSerializable
{
    private $datas = [];

    public function __construct()
    {
    }

    public function addPoint(Point $point)
    {
        $this->datas[] = $point;
    }

    public function addArrayPoint(array $point)
    {
        $this->datas[] = $point;
    }

    public function getDatas()
    {
        return $this->datas;
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
