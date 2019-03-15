<?php

namespace App\Controller;

use App\Entity\Cereals;
use App\Repository\CerealsRepository;
use App\Handler\CerealsHandler;
use App\Handler\DeleteHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CerealsController extends AbstractController
{

    /**
     * @var CerealsRepository
     */
    private $repository;

    /**
     * @var CerealsHandler
     */
    private $handler;

    /**
     * CerealsController constructor.
     * @param CerealsRepository $repository
     * @param CerealsHandler $handler
     */
    public function __construct(CerealsRepository $repository, CerealsHandler $handler)
    {
        $this->handler = $handler;
        $this->repository = $repository;
    }

    /**
     * @Route("/cereals", name="cereals", methods={"GET"})
     * @param Request $request
     * @return JsonResponse
     */
    public function cereals(Request $request)
    {
        return new JsonResponse($this->handler->handle($request)->cereals(),200);
    }


    /**
     * @Route("/cereals", name="delete_cereals", methods={"DELETE"})
     * @param Request $request
     * @return mixed
     */
    public function deleteCereal(Request $request)
    {
        return new JsonResponse($this->handler->handle($request)->deleteCereal(), 200);
    }

}
