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
    class Title implements JsonSerializable
    {
        private $text;
        private $x;
        private $y;
        private $align;
        private $verticalAlign;
        private $enabled;
        private $style = [];


        public function __construct($text)
        {
            $this->text = addslashes($text);
        }


        public function setX($x)
        {
            if (!empty($x)) {
                $this->x = $x;
            }
        }


        public function setY($y)
        {
            if (!empty($y)) {
                $this->y = $y;
            }
        }


        public function setverticalAlign($verticalAlign)
        {
            if (!empty($verticalAlign)) {
                $this->verticalAlign = $verticalAlign;
            }
        }


        public function setAlign($align)
        {
            $this->align = $align;
        }


        public function setStyle($style)
        {
            $this->style = $style;
        }

        public function setEnabled($enabled)
        {
            $this->enabled = $enabled;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }

    class SubTitle extends \Highcharts\Title
    {
    }
