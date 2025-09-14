<?php

namespace Teners\LivewireCharts\Charts;

use Teners\LivewireCharts\Models\RadialChartModel;
use Livewire\Component;

/**
 * Class LivewireRadialChart
 * @package Teners\LivewireCharts\Charts
 */
class LivewireRadialChart extends Component
{
    public $radialChartModel;

    public function mount(RadialChartModel $radialChartModel)
    {
        $this->radialChartModel = $radialChartModel->toArray();
    }

    public function onBarClick($bar): void
    {
        $onBarClickEventName = data_get($this->radialChartModel, 'onBarClickEventName');

        if ($onBarClickEventName === null) {
            return;
        }

        $this->dispatch($onBarClickEventName, $bar);
    }

    public function render()
    {
        return view('livewire-charts::livewire-radial-chart');
    }
}
