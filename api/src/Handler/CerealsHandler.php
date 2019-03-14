<?php

namespace App\Handler;

use App\Repository\CerealsRepository;

/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

class CerealsHandler
{
    private $repository;

    public function __construct(CerealsRepository $cerealsRepository)
    {
        $this->repository = $cerealsRepository;
    }
    public function handle($request)
    {

    }
}