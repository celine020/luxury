<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobCategory
 *
 * @ORM\Table(name="job_category")
 * @ORM\Entity
 */
class JobCategory
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';


}
