<?php

namespace UzDevid\Qdrant\Module\Collection;

use UzDevid\Qdrant\Exception\ClientErrorExceptionInterface;
use UzDevid\Qdrant\Exception\NotFoundExceptionInterface;
use UzDevid\Qdrant\Exception\QdrantException;
use UzDevid\Qdrant\Exception\ServiceErrorExceptionInterface;
use UzDevid\Qdrant\Module\Collection\Input\Vector;
use UzDevid\Qdrant\Module\Collection\Output\CollectionData;

interface CollectionInterface {
    /**
     * @param string $name
     * @return CollectionData
     * @throws QdrantException
     * @throws NotFoundExceptionInterface
     * @throws ServiceErrorExceptionInterface
     * @throws ClientErrorExceptionInterface
     */
    public function get(string $name): CollectionData;

    /**
     * @param string $name
     * @param Vector $vector
     * @return bool
     * @throws QdrantException
     * @throws ServiceErrorExceptionInterface
     * @throws ClientErrorExceptionInterface
     */
    public function create(string $name, Vector $vector): bool;

    /**
     * @param string $name
     * @return bool
     * @throws QdrantException
     * @throws NotFoundExceptionInterface
     * @throws ServiceErrorExceptionInterface
     * @throws ClientErrorExceptionInterface
     */
    public function delete(string $name): bool;

    /**
     * @param string $name
     * @param Vector $vector
     * @return bool
     * @throws QdrantException
     * @throws NotFoundExceptionInterface
     * @throws ServiceErrorExceptionInterface
     * @throws ClientErrorExceptionInterface
     */
    public function update(string $name, Vector $vector): bool;

    /**
     * @return CollectionData[]
     * @throws QdrantException
     * @throws ServiceErrorExceptionInterface
     * @throws ClientErrorExceptionInterface
     */
    public function list(): array;

    /**
     * @param string $name
     * @return bool
     * @throws QdrantException
     * @throws ServiceErrorExceptionInterface
     * @throws ClientErrorExceptionInterface
     */
    public function exists(string $name): bool;
}