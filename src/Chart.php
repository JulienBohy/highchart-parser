<?php

/**
 * This file is part of the comaseinformatique/highchart-parser library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) julienbohy <boju@sbim.be>
 * @license http://opensource.org/licenses/MIT MIT
 */

declare(strict_types=1);

namespace Highcharts;

    require '../vendor/autoload.php';
    /**
     * Description of Chart.
     *
     */
    require_once __DIR__.'/Const.php';
    require_once __DIR__.'/Elements/Credits.php';
    require_once __DIR__.'/Elements/Exporting.php';
    require_once __DIR__.'/Elements/Title.php';
    require_once __DIR__.'/Elements/Tooltip.php';
    require_once __DIR__.'/Elements/Axis.php';
    require_once __DIR__.'/Elements/Legend.php';
    require_once __DIR__.'/Elements/Marker.php';
    require_once __DIR__.'/Elements/plotOptions.php';
    require_once __DIR__.'/Elements/Series.php';
    require_once __DIR__.'/Elements/Datas.php';
    require_once __DIR__.'/Elements/plot.php';

    class Chart implements \JsonSerializable
    {
        private $chart;
        private $title;
        private $exporting;
        private $chartSubtitle;
        private $chartType;
        private $tooltip;
        private $credits;
        private $xAxis;
        private $yAxis;
        private $legend;
        private $plotOptions;
        private $series = [];

        public function __construct()
        {
        }

        /**
         * @param \Highcharts\Exporting $exporting
         */
        public function setExporting($exporting)
        {
            $this->exporting = $exporting;
        }

        /**
         * @param \Highcharts\ChartOptions $chart
         */
        public function setChart($chart)
        {
            $this->chart = $chart;
        }

        /**
         * @param \Highcharts\xAxis $xAxis
         */
        public function setXAxis($xAxis)
        {
            $this->xAxis = $xAxis;
        }

        /**
         * @param \Highcharts\yAxis $yAxis
         */
        public function setYAxis($yAxis)
        {
            $this->yAxis = $yAxis;
        }

        /**
         * @param \Highcharts\Title $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @param \Highcharts\Title $title
         */
        public function setChartSubTitle($title)
        {
            $this->chartSubtitle = $title;
        }

        /**
         * @param \Highcharts\Constants\ChartType $type
         */
        public function setChartType($type)
        {
            $this->chartType = $type;
        }

        /**
         * @param \Highcharts\Tooltip $tooltip
         */
        public function setTooltip(\Highcharts\Tooltip $tooltip)
        {
            $this->tooltip = $tooltip;
        }

        /**
         * @param \Highcharts\Credits $credit
         */
        public function setCredits(\Highcharts\Credits $credit)
        {
            $this->credits = $credit;
        }

        /**
         * @param \Highcharts\Legend $legend
         */
        public function setLegend($legend)
        {
            $this->legend = $legend;
        }

        /**
         * @param \Highcharts\Series $series
         */
        public function addSeries($series)
        {
            $this->series[] = $series;
        }

        /**
         * @param \Highcharts\plotOptions $plotOptions
         */
        public function setPlotOptions($plotOptions)
        {
            $this->plotOptions = $plotOptions;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }

    class ChartOptions implements \JsonSerializable
    {
        private $type;
        private $width;
        private $height;
        private $renderTo;
        private $margin;
        private $spacingLeft;

        public function setMargin($margin)
        {
            $this->margin = $margin;
        }

        public function setSpacingLeft($spacingLeft)
        {
            $this->spacingLeft = $spacingLeft;
        }

        public function setRenderTo($renderTo)
        {
            $this->renderTo = $renderTo;
        }

        public function setType($type)
        {
            $this->type = $type;
        }

        public function setWidth($width)
        {
            $this->width = $width;
        }

        public function setHeight($height)
        {
            $this->height = $height;
        }

        public function jsonSerialize()
        {
            return array_filter(get_object_vars($this));
        }
    }
