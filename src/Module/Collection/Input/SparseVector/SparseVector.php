<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input\SparseVector;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class SparseVector implements ArrayableInterface {
    use ArrayableTrait;

    public SparseIndexParams $index;
    public string $modifier;
}