<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class HnswConfigDiff implements ArrayableInterface {
    use ArrayableTrait;

    public int $m;
    public int $efConstruct;
    public int $fullScanThreshold;
    public int $maxIndexingThreads;
    public bool $onDisk;
    public int $payloadM;
}