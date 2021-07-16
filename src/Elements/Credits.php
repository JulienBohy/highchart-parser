<?php



namespace Highcharts\Elements;

use JsonSerializable;


/**
 * Description of Credits.
 *
 * @author BOJU
 */
class Credits implements JsonSerializable
{
    private $text;
    private $href;
    private $active;
    private $position;


    public function __construct($text = null, $href = null)
    {
        if (!empty($text) || !empty($href)) {
            $this->active = true;
            $this->href = $href;
            $this->text = $text;
        } else {
            $this->active = false;
        }
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
