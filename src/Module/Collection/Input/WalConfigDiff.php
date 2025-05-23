<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class WalConfigDiff implements ArrayableInterface {
    use ArrayableTrait;

    public int $walCapacityMb;
    public int $walSegmentsAhead;
}