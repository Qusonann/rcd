<?php

declare(strict_types=1);

namespace Structure;

use RedisAwareTest;
use RedisCompressedData\Structure\RangeSelection;

class RangeSelectionTest extends RedisAwareTest
{
    private RangeSelection $rangeSelection;

    protected function setUp(): void
    {
        parent::setUp();
        $this->rangeSelection = new RangeSelection($this->client);
    }

    public function testPrefix(): void
    {
        self::assertEquals('', $this->rangeSelection->getPrefix());
    }
}
