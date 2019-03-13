<?php

namespace App\Controller;

use App\Service\VectorActionsService;
use App\Utils\Vector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class VectorsController extends AbstractController
{
    /**
     * @Route("/vectors", name="vectors")
     */
    public function index()
    {

    }

    /**
     * @Route("/vectors/repeat", name="vectors_repeat")
     * @param VectorActionsService $vectorActions
     * @return JsonResponse
     */
    public function getCountRepeat(VectorActionsService $vectorActions)
    {
        return new JsonResponse(array_values($vectorActions->countRepeatNumbers()),200);
    }
}
