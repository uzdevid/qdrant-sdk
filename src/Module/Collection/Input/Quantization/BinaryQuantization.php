<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input\Quantization;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class BinaryQuantization extends QuantizationConfig implements ArrayableInterface {
    use ArrayableTrait;

    public array $binary;

    /**
     * @param bool $alwaysRam
     */
    public function __construct(
        bool $alwaysRam
    ) {
        $this->binary = [
            'alwaysRam' => $alwaysRam
        ];
    }
}