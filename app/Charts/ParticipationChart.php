<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ParticipationChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        return $this->chart->barChart()
            ->setTitle('Statistik Partisipasi')
            ->setSubtitle('Mengikuti Lomba')
            ->addData('Boston', [7, 3, 8, 2, 6, 4, 1, 3, 2, 7, 5, 8])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']);
    }
}
