<?php

namespace Imjoehaines\FlowderJson\Test\Integration;

use PHPUnit\Framework\TestCase;
use Imjoehaines\FlowderJson\JsonLoader;

final class JsonLoaderTest extends TestCase
{
    public function testItReturnsParsedJsonFromTheGivenFilePath()
    {
        $loader = new JsonLoader();
        $data = $loader->load(__DIR__ . '/../data/one.json');

        $actual = iterator_to_array($data);
        $expected = [
            'one' => [
                [
                    'column_1' => 'value 1',
                    'column_2' => 2,
                    'column_3' => 'three',
                ],
                [
                    'column_1' => 'value 4',
                    'column_2' => 5,
                    'column_3' => 'six',
                ],
            ],
        ];

        $this->assertSame($expected, $actual);
    }
}
