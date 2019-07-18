<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_8D93D649E7927C74", columns={"email"})})
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $password = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $gender = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $firstName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $lastName = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="phone_number", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $phoneNumber = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile_picture", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $profilePicture = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="current_location", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $currentLocation = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $address = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $country = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationality", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nationality = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $birthDate = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="birth_place", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $birthPlace = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="passport", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $passport = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $resume = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="experience", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $experience = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isAdmin = 'NULL';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="availability", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $availability = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="job_category", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $jobCategory = 'NULL';


}
