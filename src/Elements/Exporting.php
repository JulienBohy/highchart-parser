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
class Exporting implements JsonSerializable
{
    private $enabled;
    private $url;
    private $filename;

    public function setEnabled($enabled)
    {
        //var_dump($enabled);exit;
        $this->enabled = $enabled;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
