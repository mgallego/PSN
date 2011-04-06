<?php

namespace Acme\DemoBundle\Entity;

/**
 * Acme\DemoBundle\Entity\User
 *
 * @orm:Table(name="User")
 * @orm:Entity
 */
class User
{
    /**
     * @var integer $id
     *
     * @orm:Column(name="id", type="integer", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @orm:Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $password
     *
     * @orm:Column(name="password", type="string", length=15, nullable=true)
     */
    private $password;


}