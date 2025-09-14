<?php


namespace Teners\LivewireCharts;


use Teners\LivewireCharts\Models\AreaChartModel;
use Teners\LivewireCharts\Models\ColumnChartModel;
use Teners\LivewireCharts\Models\LineChartModel;
use Teners\LivewireCharts\Models\PieChartModel;
use Teners\LivewireCharts\Models\RadarChartModel;
use Teners\LivewireCharts\Models\RadialChartModel;
use Teners\LivewireCharts\Models\TreeMapChartModel;

class LivewireCharts
{
    public function lineChartModel()
    {
        return (new LineChartModel)
            ->singleLine();
    }

    public function multiLineChartModel()
    {
        return (new LineChartModel)
            ->multiLine();
    }

    public function columnChartModel()
    {
        return (new ColumnChartModel)
            ->singleColumn();
    }

    public function multiColumnChartModel()
    {
        return (new ColumnChartModel)
            ->multiColumn();
    }

    public function areaChartModel()
    {
        return new AreaChartModel;
    }

    public function pieChartModel()
    {
        return new PieChartModel;
    }

    public function radarChartModel()
    {
        return new RadarChartModel();
    }

    public function treeMapChartModel(): TreeMapChartModel
    {
        return new TreeMapChartModel();
    }

    public function radialChartModel(): RadialChartModel
    {
        return new RadialChartModel();
    }
}
