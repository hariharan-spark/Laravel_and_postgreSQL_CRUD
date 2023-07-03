<?php

declare(strict_types=1);

namespace Spiral\Goridge\RPC;

use Spiral\Goridge\Exception\GoridgeException;
use Spiral\Goridge\RPC\Exception\RPCException;

interface RPCInterface
{
    /**
     * Create RPC instance with service specific prefix.
     *
     * @psalm-pure
     * @param non-empty-string $service
     */
    public function withServicePrefix(string $service): self;

    /**
     * Create RPC instance with service specific codec.
     *
     * @psalm-pure
     */
    public function withCodec(CodecInterface $codec): self;

    /**
     * Invoke remove RoadRunner service method using given payload (free form).
     *
     * @param non-empty-string $method
     *
     * @throws GoridgeException
     * @throws RPCException
     */
    public function call(string $method, mixed $payload, mixed $options = null): mixed;
}
