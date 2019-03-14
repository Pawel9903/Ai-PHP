<?php

namespace App\Handler;

use Doctrine\ORM\EntityManagerInterface;

/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

class DeleteHandler
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @param $className
     * @param $id
     * @return bool
     */
    public function handle($className, $id)
    {
        try{
            $entity = $this->entityManager->getRepository($className)->find($id);
            $this->entityManager->remove($entity);
            $this->entityManager->flush();
            return true;
        }catch (\Exception $exception)
        {
            return false;
        }
    }

}