<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace App\Repository;

use App\Entity\Cereals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CerealsRepository extends ServiceEntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * CerealsRepository constructor.
     * @param RegistryInterface $registry
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(RegistryInterface $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, Cereals::class);

        $this->em = $entityManager;
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $this->em->remove($this->find($id));
        $this->em->flush();

        return true;
    }
}