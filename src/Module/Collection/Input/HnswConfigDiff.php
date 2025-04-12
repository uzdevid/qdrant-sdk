<?php
declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

class HnswConfigDiff {
    public int $m;
    public int $efConstruct;
    public int $fullScanThreshold;
    public int $maxIndexingThreads;
    public bool $onDisk;
    public int $payloadM;
}