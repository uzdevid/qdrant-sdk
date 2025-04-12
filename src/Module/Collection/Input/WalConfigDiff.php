<?php
declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection\Input;

class WalConfigDiff {
    public int $walCapacityMb;
    public int $walSegmentsAhead;
}