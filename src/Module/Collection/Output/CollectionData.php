<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Output;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class CollectionData implements ArrayableInterface {
    use ArrayableTrait;
    
    public string $name;
}