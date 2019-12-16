<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

namespace Highcharts;

    /**
     * Description of XAxis.
     *
     * @author BOJU
     */
    class Axis implements \JsonSerializable
    {
        private $title;
        private $lineColor;
        private $gridLineWidth;
        private $lineWidth;
        private $min;
        private $max;
        private $tickInterval;
        private $minorTickInterval;
        private $gridLineDashStyle;
        private $gridLineColor;
        private $crosshair;
        private $reversed;
        private $type;
        private $endOnTick;
        private $plotLines = [];
        private $categories = [];


        public function setCrosshair($crosshair)
        {
            $this->crosshair = $crosshair;
        }

        public function setTitle($title)
        {
            if ($title instanceof Title) {
                $this->title = $title;
            } else {
                $this->title = $title;
            }
        }

        public function setLineColor($lineColor)
        {
            $this->lineColor = $lineColor;
        }

        public function setType($type)
        {
            $this->type = $type;
        }

        public function setCategories($categories)
        {
            $this->categories = $categories;
        }

        public function setMinorTickInterval($minorTickInterval)
        {
            $this->minorTickInterval = $minorTickInterval;
        }

        public function setEndOnTick($endOnTick)
        {
            $this->endOnTick = $endOnTick;
        }

        public function setReversed($reversed)
        {
            $this->reversed = $reversed;
        }

        public function setGridLineWidth($gridLineWidth)
        {
            $this->gridLineWidth = $gridLineWidth;
        }

        public function setMin($min)
        {
            $this->min = $min;
        }

        public function setLineWidth($lineWidth)
        {
            $this->lineWidth = $lineWidth;
        }

        public function setMax($max)
        {
            $this->max = $max;
        }

        public function setTickInterval($tickInterval)
        {
            $this->tickInterval = $tickInterval;
        }

        public function setGridLineDashStyle($gridLineDashStyle)
        {
            $this->gridLineDashStyle = $gridLineDashStyle;
        }

        public function setGridLineColor($gridLineColor)
        {
            $this->gridLineColor = $gridLineColor;
        }

        public function addPlotLines($plotLine)
        {
            $this->plotLines[] = $plotLine;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }

    class xAxis extends \Highcharts\Axis
    {
    }

    class yAxis extends \Highcharts\Axis
    {
    }
