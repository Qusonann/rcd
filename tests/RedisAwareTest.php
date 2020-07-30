<?php

declare(strict_types=1);

use Mock\MyRedisMock;
use PHPUnit\Framework\TestCase;
use Predis\ClientInterface;

abstract class RedisAwareTest extends TestCase
{
    protected ClientInterface $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = new MyRedisMock();
    }
}
