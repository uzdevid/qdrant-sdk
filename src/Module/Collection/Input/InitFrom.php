<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class InitFrom implements ArrayableInterface {
    use ArrayableTrait;

    public string $collection;
}