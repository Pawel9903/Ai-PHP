<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Traits;

use Ai\Services\Container;


trait ContainerTrait{

    /**
     * @var Container
     */
    private $container;

    /**
     * ContainerTrait constructor.
     */
    public function __construct()
    {
        $this->container = new Container();
    }
}