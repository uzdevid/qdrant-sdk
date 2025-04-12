<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

class Vector {
    public int $shardNumber;
    public string $shardingMethod;
    public int $replicationFactor;
    public int $writeConsistencyFactor;
    public bool $onDiskPayload = true;
    public HnswConfigDiff $hnswConfig;
    public WalConfigDiff $walConfig;
}