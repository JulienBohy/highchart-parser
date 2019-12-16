<?php

declare(strict_types=1);

namespace Highcharts\Test;

use Highcharts\Chart;

class ChartTest extends TestCase
{
    public function testGetHello()
    {
        $object = \Mockery::mock(Chart::class);
        $object->shouldReceive('getHello')->passthru();

        $this->assertSame('Hello, World!', $object->getHello());
    }
}
