<?php

namespace Teners\LivewireCharts\Charts;

use Teners\LivewireCharts\Models\RadarChartModel;
use Livewire\Component;

/**
 * Class LivewireRadarChart
 * @package Teners\LivewireCharts\Charts
 */
class LivewireRadarChart extends Component
{
    public $radarChartModel;

    public function mount(RadarChartModel $radarChartModel)
    {
        $this->radarChartModel = $radarChartModel->toArray();
    }

    public function onPointClick($point)
    {
        $onPointClickEventName = data_get($this->radarChartModel, 'onPointClickEventName', null);

        if ($onPointClickEventName === null) {
            return;
        }

        $this->dispatch($onPointClickEventName, $point);
    }

    public function render()
    {
        return view('livewire-charts::livewire-radar-chart');
    }
}
