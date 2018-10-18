<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Model;

/**
 * A generic response. Ie for delete actions.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
class ApiResponse implements CreatableFromArray
{
    public static function createFromArray(array $data)
    {
        $x = 2;
    }
}
