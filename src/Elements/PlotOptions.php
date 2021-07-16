<?php



namespace Highcharts\Elements;

use JsonSerializable;


/**
 * Description of plotOptions.
 *
 * @author BOJU
 */
class PlotOptions implements JsonSerializable
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
