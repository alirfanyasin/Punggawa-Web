<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class BootcampChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        return $this->chart->radialChart()
            ->setTitle('Bootcamp')
            ->setSubtitle('Berlangsung')
            ->addData([80])
            ->setLabels(['Progress'])
            ->setColors(['#15616D']);
    }
}
