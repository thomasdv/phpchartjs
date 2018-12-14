<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Json;

/**
 * Class ScaleLabel
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class ScaleLabel implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var bool
     */
    protected $display;

    /**
     * @var string
     */
    protected $labelString;

    /**
     * @var string
     */
    protected $fontColor;

    /**
     * @var string
     */
    protected $fontFamily;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @var string
     */
    protected $fontStyle;

    /**
     * @return bool
     */
    public function isDisplay()
    {
        return $this->display;
    }

    /**
     * @return bool
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param bool $display
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = ! ! $display;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabelString()
    {
        return $this->labelString;
    }

    /**
     * @param string $labelString
     *
     * @return $this
     */
    public function setLabelString($labelString)
    {
        $this->labelString = strval($labelString);

        return $this;
    }

    /**
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * @param string $fontColor
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = strval($fontColor);

        return $this;
    }

    /**
     * @return string
     */
    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    /**
     * @param string $fontFamily
     *
     * @return $this
     */
    public function setFontFamily($fontFamily)
    {
        $this->fontFamily = strval($fontFamily);

        return $this;
    }

    /**
     * @return int
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param int $fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = intval($fontSize);

        return $this;
    }

    /**
     * @return string
     */
    public function getFontStyle()
    {
        return $this->fontStyle;
    }

    /**
     * @param string $fontStyle
     *
     * @return $this
     */
    public function setFontStyle($fontStyle)
    {
        $this->fontStyle = strval($fontStyle);

        return $this;
    }

    /**
     * @return string
     * @throws \ReflectionException
     * @throws \Zend_Reflection_Exception
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy());
    }
}
