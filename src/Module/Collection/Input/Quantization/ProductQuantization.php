<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input\Quantization;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class ProductQuantization extends QuantizationConfig implements ArrayableInterface {
    use ArrayableTrait;

    public array $product;

    /**
     * @param string $compression
     * @param bool $alwaysRam
     */
    public function __construct(
        string $compression,
        bool   $alwaysRam
    ) {
        $this->product = [
            'compression' => $compression,
            'alwaysRam' => $alwaysRam
        ];
    }
}