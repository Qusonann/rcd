<?php

declare(strict_types=1);

namespace RedisCompressedData\Structure;

use Predis\ClientInterface;

class RangeSelection
{
    protected ClientInterface $client;
    protected string $prefix;

    public function __construct(ClientInterface $client, string $prefix = '')
    {
        $this->client = $client;
        $this->prefix = $prefix;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }
}
