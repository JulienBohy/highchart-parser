<?php

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

namespace Highcharts\Elements;

    /**
     * Description of plotOptions.
     *
     * @author BOJU
     */
    class plotOptions implements \JsonSerializable
    {
        private $spline;
        private $scatter;
        private $series;

        public function __construct()
        {
            $this->series = new SeriesOptions();
        }

        public function setSpline($spline)
        {
            $this->spline = $spline;
        }

        public function setScatter($scatter)
        {
            $this->scatter = $scatter;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }

    class splinePlotOption implements \JsonSerializable
    {
        private $marker;

        public function setMarker($marker)
        {
            $this->marker = $marker;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }

    class scatterPlotOption implements \JsonSerializable
    {
        private $marker;

        public function setMarker($marker)
        {
            $this->marker = $marker;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }

    class SeriesOptions implements \JsonSerializable
    {
        private $states;

        public function __construct()
        {
            $this->states = new States();
        }

        public function jsonSerialize()
        {
            return get_object_vars($this);
        }
    }

    class States implements \JsonSerializable
    {
        private $hover;

        public function __construct()
        {
            $this->hover = new Hover();
        }

        public function jsonSerialize()
        {
            return get_object_vars($this);
        }
    }

    class Hover implements \JsonSerializable
    {
        private $enabled;

        public function __construct()
        {
            $this->enabled = Constants\Enabled::FALSE;
        }

        public function jsonSerialize()
        {
            return get_object_vars($this);
        }
    }
