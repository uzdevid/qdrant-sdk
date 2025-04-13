<?php declare(strict_types=1);

namespace UzDevid\Qdrant\Module\Collection;

use UzDevid\Qdrant\Module\Collection\Input\SparseVector\SparseVector;
use Yiisoft\Arrays\ArrayableInterface;

class SparseVectorsCollection implements ArrayableInterface {
    private array $vectors;

    /**
     * @param string $name
     * @param SparseVector $vector
     * @return $this
     */
    public function withVector(string $name, SparseVector $vector): static {
        $new = clone $this;
        $new->vectors[$name] = $vector;
        return $new;
    }

    /**
     * @param array $fields
     * @param array $expand
     * @param bool $recursive
     * @return array
     */
    public function toArray(array $fields = [], array $expand = [], bool $recursive = true): array {
        return $this->vectors;
    }

    /**
     * @return array
     */
    public function fields(): array {
        return [];
    }

    /**
     * @return array
     */
    public function extraFields(): array {
        return [];
    }
}