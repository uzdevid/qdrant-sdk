<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

use UzDevid\Qdrant\Module\Collection\Input\Quantization\QuantizationConfig;
use UzDevid\Qdrant\Module\Collection\SparseVectorsCollection;
use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class Vector implements ArrayableInterface {
    use ArrayableTrait;

    public int $shardNumber;
    public string $shardingMethod;
    public int $replicationFactor;
    public int $writeConsistencyFactor;
    public bool $onDiskPayload = true;
    public HnswConfigDiff $hnswConfig;
    public WalConfigDiff $walConfig;
    public OptimizersConfigDiff $optimizersConfig;
    public InitFrom $initFrom;
    public QuantizationConfig $quantizationConfig;
    public SparseVectorsCollection $sparseVectors;
}