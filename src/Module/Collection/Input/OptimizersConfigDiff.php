<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class OptimizersConfigDiff implements ArrayableInterface {
    use ArrayableTrait;

    public float $deletedThreshold;
    public int $vacuumMinVectorNumber;
    public int $defaultSegmentNumber;
    public int $maxSegmentSize;
    public int $memMapThreshold;
    public int $indexingThreshold;
    public int $flushIntervalSec;
}