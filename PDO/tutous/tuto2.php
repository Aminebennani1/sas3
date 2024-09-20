<?php
class User
{
  private $firstName;
  private $lastName;
  private $email;

  public function __construct($firstName, $lastName, $email)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
  }

  public function getFirstName()
  {
    return $this->firstName;
  }

  public function setLastName($lastName)
  {
    $this->lastName = $lastName;
  }
}

$user = new User("amine", "bennani", "aminebennani@gmail.com");
echo $user->getFirstName();
echo $user->setLastName("bennani");

