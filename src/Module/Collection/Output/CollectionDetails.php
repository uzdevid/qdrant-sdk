<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Output;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class CollectionDetails implements ArrayableInterface {
    use ArrayableTrait;

    public string $status;
    public OptimizersStatusError|string $optimizersStatus;
    public int $segmentsCount;
}