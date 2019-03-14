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
    private $repository;
    public function __construct(CerealsRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * @Route("/cereals", name="cereals", methods={"GET"})
     */
    public function cereals()
    {
        return new JsonResponse($this->repository->findAll(),200);    }
    /**
     * @Route("/cereals/{id}", name="cereal" , methods={"GET"})
     * @param Request $request
     * @return mixed
     */
    public function cereal(Request $request)
    {
        return new JsonResponse($this->repository->getById($request->get('id')),200);
    }

    /**
     * @Route("/cereals", name="delete_cereals", methods={"DELETE"})
     * @param DeleteHandler $handler
     * @param Request $request
     * @return mixed
     */
    public function deleteCereals(DeleteHandler $handler, Request $request)
    {
        return new JsonResponse($handler->handle(Cereals::class, $request->get('id')), 200);
    }
    /**
     * @Route("/cereals", name="add_cereals", methods={"POST"})
     * @param cerealsHandler $handler
     * @param Request $request
     * @return mixed
     */
    public function storeCereals(CerealsHandler $handler, Request $request)
    {
//        return new JsonResponse($this->repository->store($handler->handle($request)), 200);
    }
    /**
     * @Route("/cereals", name="update_cereals", methods={"PUT"})
     * @param cerealsHandler $handler
     * @param Request $request
     * @return mixed
     */
    public function updateCereals(CerealsHandler $handler, Request $request)
    {
//        return new JsonResponse($this->repository->store($handler->handle($request)), 200);
    }
}
