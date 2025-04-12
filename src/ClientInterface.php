<?php

namespace UzDevid\Qdrant;

use UzDevid\Qdrant\Module\AliasInterface;
use UzDevid\Qdrant\Module\Collection\CollectionInterface;
use UzDevid\Qdrant\Module\IndexInterface;
use UzDevid\Qdrant\Module\PointInterface;
use UzDevid\Qdrant\Module\SearchInterface;
use UzDevid\Qdrant\Module\ServiceInterface;
use UzDevid\Qdrant\Module\SnapshotInterface;

interface ClientInterface {
    /**
     * @return CollectionInterface
     */
    public function collection(): CollectionInterface;

    /**
     * @return PointInterface
     */
    public function point(): PointInterface;

    /**
     * @return SearchInterface
     */
    public function search(): SearchInterface;

    /**
     * @return IndexInterface
     */
    public function index(): IndexInterface;

    /**
     * @return SnapshotInterface
     */
    public function snapshot(): SnapshotInterface;

    /**
     * @return AliasInterface
     */
    public function alias(): AliasInterface;

    /**
     * @return ServiceInterface
     */
    public function service(): ServiceInterface;
}