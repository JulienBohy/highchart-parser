<?php


namespace Highcharts;

use Highcharts\Constants\ChartType;
use Highcharts\Elements\Credits;
use Highcharts\Elements\Exporting;
use Highcharts\Elements\Legend;
use Highcharts\Elements\plotOptions;
use Highcharts\Elements\Series;
use Highcharts\Elements\Title;
use Highcharts\Elements\Tooltip;
use Highcharts\Elements\xAxis;
use Highcharts\Elements\yAxis;
use JsonSerializable;



class Chart implements JsonSerializable
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
     * @param Exporting $exporting
     */
    public function setExporting($exporting)
    {
        $this->exporting = $exporting;
    }

    /**
     * @param ChartOptions $chart
     */
    public function setChart($chart)
    {
        $this->chart = $chart;
    }

    /**
     * @param xAxis $xAxis
     */
    public function setXAxis($xAxis)
    {
        $this->xAxis = $xAxis;
    }

    /**
     * @param yAxis $yAxis
     */
    public function setYAxis($yAxis)
    {
        $this->yAxis = $yAxis;
    }

    /**
     * @param Title $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param Title $title
     */
    public function setChartSubTitle($title)
    {
        $this->chartSubtitle = $title;
    }

    /**
     * @param ChartType $type
     */
    public function setChartType($type)
    {
        $this->chartType = $type;
    }

    /**
     * @param Tooltip $tooltip
     */
    public function setTooltip(Tooltip $tooltip)
    {
        $this->tooltip = $tooltip;
    }

    /**
     * @param Credits $credit
     */
    public function setCredits(Credits $credit)
    {
        $this->credits = $credit;
    }

    /**
     * @param Legend $legend
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
    }

    /**
     * @param Series $series
     */
    public function addSeries($series)
    {
        $this->series[] = $series;
    }

    /**
     * @param plotOptions $plotOptions
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
