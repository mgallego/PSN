<?php 
namespace Acme\DemoBundle\Create;

class CreateRequest
{

  /**
   * @validation:MaxLength(2)
   */
  protected $username;

  protected $password;

  protected $firstName;

  protected $lastName;

  /**
   * @validation:Email
   */
  protected $email;

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function getUsername()
  {
    return $this->username;
  }


  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setFirstName($firstName)
  {
    $this->firstName = $firstName;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }

  public function getLastName()
  {
    return $this->lastName;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }


    public function __construct()
  {

  }

}