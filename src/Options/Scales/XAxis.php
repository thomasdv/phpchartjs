<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\Options\Scale;

/**
 * Class XAxis
 *
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class XAxis extends Scale
{
    /**
     * @var float
     */
    private $categoryPercentage;

    /**
     * @var float
     */
    private $barPercentage;

    /**
     * @return float
     */
    public function getCategoryPercentage()
    {
        return $this->categoryPercentage;
    }

    /**
     * @param float $categoryPercentage
     *
     * @return $this
     */
    public function setCategoryPercentage($categoryPercentage)
    {
        $this->categoryPercentage = floatval($categoryPercentage);

        return $this;
    }

    /**
     * @return float
     */
    public function getBarPercentage()
    {
        return $this->barPercentage;
    }

    /**
     * @param float $barPercentage
     *
     * @return $this
     */
    public function setBarPercentage($barPercentage)
    {
        $this->barPercentage = floatval($barPercentage);

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize(): mixed
    {
        return $this->getArrayCopy();
    }
}
