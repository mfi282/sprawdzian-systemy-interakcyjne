<?php
/**
 * Book service interface.
 */

namespace App\Service;

use App\Entity\Book;
use Knp\Component\Pager\Pagination\PaginationInterface;

/**
 * Interface BookServiceInterface.
 */
interface BookServiceInterface
{
    /**
     * Get paginated list.
     *
     * @param int $page Page number
     *
     * @return PaginationInterface<string, mixed> Paginated list
     */
    public function getPaginatedList(int $page): PaginationInterface;

    /**
     * Save entity.
     *
     * @param Book $Book Book entity
     */
    public function save(Book $Book): void;

    /**
     * Delete entity.
     *
     * @param Book $Book Book entity
     */
    public function delete(Book $Book): void;
}