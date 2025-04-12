<?php declare(strict_types=1);

namespace UzDevid\Converter\Tests\Support;

use UzDevid\Qdrant\Module\Collection\CollectionInterface;
use UzDevid\Qdrant\Module\Collection\Input\Vector;
use UzDevid\Qdrant\Module\Collection\Output\CollectionData;

class Collection implements CollectionInterface {
    public function get(string $name): CollectionData {
        return new CollectionData();
    }

    public function create(string $name, Vector $vector): bool {
        return true;
    }

    public function delete(string $name): bool {
        return true;
    }

    public function update(string $name): bool {
        return true;
    }

    public function list(): array {
        return [new CollectionData()];
    }

    public function exists(string $name): bool {
        return true;
    }
}