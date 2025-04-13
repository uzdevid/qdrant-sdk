<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Output;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class OptimizersStatusError implements ArrayableInterface {
    use ArrayableTrait;

    public string $error;
}