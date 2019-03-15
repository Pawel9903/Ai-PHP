<?php

namespace App\Handler;

use App\Repository\CerealsRepository;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

class CerealsHandler
{
    /**
     * @var CerealsRepository
     */
    private $repository;

    /**
     * @var null
     */
    private $request = null;

    /**
     * CerealsHandler constructor.
     * @param CerealsRepository $cerealsRepository
     */
    public function __construct(CerealsRepository $cerealsRepository)
    {
        $this->repository = $cerealsRepository;
    }

    /**
     * @param Request $request
     * @return CerealsHandler
     */
    public function handle(Request $request): CerealsHandler
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return array
     */
    public function cereals()
    {
        return $this->repository->findAll();
    }


    public function deleteCereal()
    {
        return $this->repository->delete($this->request->get('id'));

    }

}