<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
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
     * @var string
     *
     * @ORM\Column(name="jobCategory", type="string", length=255, nullable=false)
     */
    private $jobcategory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJobcategory(): ?string
    {
        return $this->jobcategory;
    }

    public function setJobcategory(string $jobcategory): self
    {
        $this->jobcategory = $jobcategory;

        return $this;
    }


}
