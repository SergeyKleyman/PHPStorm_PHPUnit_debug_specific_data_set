<?php

declare(strict_types=1);

namespace DebugTestDataSetTests;

use PHPUnit\Framework\TestCase;

final class DataSetsTest extends TestCase
{
    /**
     * @return iterable<array{int}>
     */
    public static function dataProviderForTestDummy(): iterable
    {
        for ($i = 1; $i < 5; ++$i) {
            yield [$i];
        }
    }

    /**
     * @dataProvider dataProviderForTestDummy
     */
    public function testDummy(int $counter): void
    {
        self::assertNotSame(4, $counter);
    }
}
