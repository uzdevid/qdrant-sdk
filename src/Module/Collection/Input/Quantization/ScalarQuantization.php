<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input\Quantization;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class ScalarQuantization extends QuantizationConfig implements ArrayableInterface {
    use ArrayableTrait;

    public array $scalar;

    /**
     * @param int $type
     * @param float $quantile
     * @param bool $alwaysRam
     */
    public function __construct(
        int   $type,
        float $quantile,
        bool  $alwaysRam
    ) {
        $this->scalar = [
            'type' => $type,
            'quantile' => $quantile,
            'alwaysRam' => $alwaysRam
        ];
    }
}