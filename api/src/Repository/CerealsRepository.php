<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace App\Repository;

use App\Entity\Cereals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CerealsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cereals::class);
    }

    public function getById($id)
    {
        $user = $this->find($id);
        return $user === null? false : $user;
    }
}