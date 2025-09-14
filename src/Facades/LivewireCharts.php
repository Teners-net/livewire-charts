<?php

namespace Teners\LivewireCharts\Facades;

use Teners\LivewireCharts\Models\AreaChartModel;
use Teners\LivewireCharts\Models\ColumnChartModel;
use Teners\LivewireCharts\Models\LineChartModel;
use Teners\LivewireCharts\Models\PieChartModel;
use Teners\LivewireCharts\Models\RadarChartModel;
use Teners\LivewireCharts\Models\RadialChartModel;
use Teners\LivewireCharts\Models\TreeMapChartModel;
use Illuminate\Support\Facades\Facade;

/**
 * Class LivewireCharts
 * @package Teners\LivewireCharts\Facades
 * @method static LineChartModel lineChartModel()
 * @method static LineChartModel multiLineChartModel()
 * @method static ColumnChartModel columnChartModel()
 * @method static ColumnChartModel multiColumnChartModel()
 * @method static AreaChartModel areaChartModel()
 * @method static PieChartModel pieChartModel()
 * @method static RadarChartModel radarChartModel()
 * @method static TreeMapChartModel treeMapChartModel()
 * @method static RadialChartModel radialChartModel()
 */
class LivewireCharts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewirecharts';
    }
}
