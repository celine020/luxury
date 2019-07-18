<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity
 */
class Client
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
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $companyName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company_type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $companyType = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $contactName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_job", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $contactJob = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_email", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $contactEmail = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="contact_phone_number", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $contactPhoneNumber = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $createdAt = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $updatedAt = 'NULL';


}
