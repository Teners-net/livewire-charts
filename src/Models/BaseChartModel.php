<?php


namespace Teners\LivewireCharts\Models;

use Teners\LivewireCharts\Models\Traits\HasAnimation;
use Teners\LivewireCharts\Models\Traits\HasAxis;
use Teners\LivewireCharts\Models\Traits\HasColors;
use Teners\LivewireCharts\Models\Traits\HasDataLabels;
use Teners\LivewireCharts\Models\Traits\HasGrid;
use Teners\LivewireCharts\Models\Traits\HasJsonConfig;
use Teners\LivewireCharts\Models\Traits\HasLegend;
use Teners\LivewireCharts\Models\Traits\HasSparkline;
use Teners\LivewireCharts\Models\Traits\HasStroke;
use Teners\LivewireCharts\Models\Traits\HasTheme;
use Teners\LivewireCharts\Models\Traits\HasTitle;

/**
 * Class BaseChartModel
 * @package Teners\LivewireCharts\Models
 */
class BaseChartModel
{
    use HasTitle;
    use HasAnimation;
    use HasAxis;
    use HasStroke;
    use HasLegend;
    use HasDataLabels;
    use HasSparkline;
    use HasGrid;
    use HasColors;
    use HasTheme;
    use HasJsonConfig;

    public function __construct()
    {
        $this->initTitle();
        $this->initAnimation();
        $this->initAxis();
        $this->initStroke();
        $this->initLegend();
        $this->initDataLabels();
        $this->initSparkline();
        $this->initGrid();
        $this->initColors();
        $this->initTheme();
        $this->initJsonConfig();
    }

    public function reactiveKey()
    {
        return md5(json_encode($this->toArray()));
    }

    public function toArray()
    {
        return array_merge(
            $this->titleToArray(),
            $this->animationToArray(),
            $this->axisToArray(),
            $this->strokeToArray(),
            $this->legendToArray(),
            $this->dataLabelsToArray(),
            $this->sparklineToArray(),
            $this->gridToArray(),
            $this->colorsToArray(),
            $this->themeToArray(),
            $this->jsonConfigToArray(),
        );
    }

    public function fromArray($array)
    {
        $this->titleFromArray($array);
        $this->animationFromArray($array);
        $this->axisFromArray($array);
        $this->strokeFromArray($array);
        $this->legendFromArray($array);
        $this->dataLabelsFromArray($array);
        $this->sparklineFromArray($array);
        $this->gridFromArray($array);
        $this->colorsFromArray($array);
        $this->themeFromArray($array);
        $this->jsonConfigFromArray($array);
    }
}
