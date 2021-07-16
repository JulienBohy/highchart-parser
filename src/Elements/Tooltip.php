<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

namespace Highcharts\Elements;
use JsonSerializable;

require '../../vendor/autoload.php';
    /**
     * Description of Title.
     *
     * @author BOJU
     */
    class Tooltip implements JsonSerializable
    {
        private $shared;
        private $valueDecimals;
        private $crosshairs;
        private $enabled = true;

        public function __construct()
        {
        }

        public function setEnabled($enabled)
        {
            $this->enabled = $enabled;
        }

        public function setShared($bool)
        {
            $this->shared = $bool;
        }

        public function setCrosshairs($bool)
        {
            $this->crosshairs = $bool;
        }

        public function setValueDecimals($value)
        {
            $this->valueDecimals = (int) $value;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }
