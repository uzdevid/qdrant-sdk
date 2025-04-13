<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input\SparseVector;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class SparseIndexParams implements ArrayableInterface {
    use ArrayableTrait;

    public int $fullScanThreshold;
    public bool $onDisk;
    public string $dataType;
}