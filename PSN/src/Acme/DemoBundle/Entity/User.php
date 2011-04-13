<?php
namespace Acme\DemoBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Acme\DemoBundle\Entity\User
 * @orm:Entity
 */
class User extends BaseUser
{
  /**
   * @orm:Id
   * @orm:Column(type="integer")
   * @orm:generatedValue(strategy="AUTO")
   */
  protected $id;
}