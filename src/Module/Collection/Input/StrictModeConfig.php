<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

use Yiisoft\Arrays\ArrayableInterface;
use Yiisoft\Arrays\ArrayableTrait;

class StrictModeConfig implements ArrayableInterface {
    use ArrayableTrait;

    public bool $enabled;
    public int $maxQueryLimit;
    public int $maxTimeout;
    public bool $unIndexedFilteringRetrieve;
    public bool $unIndexedFilteringUpdate;
    public int $searchMaxHnswEf;
    public bool $searchAllowExact;
    public float $searchMaxOversampling;
    public int $upsertMaxBatchSize;
    public int $maxCollectionVectorSizeBytes;
    public int $readRateLimit;
    public int $writeRateLimit;
    public int $maxCollectionPayloadSizeBytes;
    public int $filterMaxConditions;
    public int $conditionMaxSize;
}