<?php

namespace FOS\UserBundle\Model;

use FOS\UserBundle\Util\CanonicalizerInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface as SecurityUserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * Abstract User Manager implementation which can be used as base class for your
 * concrete manager.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
abstract class UserManager implements UserManagerInterface, UserProviderInterface
{
    protected $encoderFactory;
    protected $algorithm;
    protected $usernameCanonicalizer;
    protected $emailCanonicalizer;

    /**
     * Constructor.
     *
     * @param EncoderFactoryInterface $encoderFactory
     * @param string                  $algorithm
     * @param CanonicalizerInterface  $usernameCanonicalizer
     * @param CanonicalizerInterface  $emailCanonicalizer
     */
    public function __construct(EncoderFactoryInterface $encoderFactory, $algorithm, CanonicalizerInterface $usernameCanonicalizer, CanonicalizerInterface $emailCanonicalizer)
    {
        $this->encoderFactory = $encoderFactory;
        $this->algorithm = $algorithm;
        $this->usernameCanonicalizer = $usernameCanonicalizer;
        $this->emailCanonicalizer = $emailCanonicalizer;
    }

    /**
     * Returns an empty user instance
     *
     * @return User
     */
    public function createUser()
    {
        $class = $this->getClass();
        $user = new $class;
        $user->setAlgorithm($this->algorithm);

        return $user;
    }

    /**
     * Finds a user by email
     *
     * @param string $email
     * @return User
     */
    public function findUserByEmail($email)
    {
        return $this->findUserBy(array('emailCanonical' => $this->emailCanonicalizer->canonicalize($email)));
    }

    /**
     * Finds a user by username
     *
     * @param string $username
     * @return User
     */
    public function findUserByUsername($username)
    {
        return $this->findUserBy(array('usernameCanonical' => $this->usernameCanonicalizer->canonicalize($username)));
    }

    /**
     * Finds a user either by email, or username
     *
     * @param string $usernameOrEmail
     * @return User
     */
    public function findUserByUsernameOrEmail($usernameOrEmail)
    {
        if (filter_var($usernameOrEmail, FILTER_VALIDATE_EMAIL)) {
            return $this->findUserByEmail($usernameOrEmail);
        }

        return $this->findUserByUsername($usernameOrEmail);
    }

    public function findUserByConfirmationToken($token)
    {
        return $this->findUserBy(array('confirmationToken' => $token));
    }

    /**
     * Finds a user by account
     *
     * It is strongly discouraged to use this method manually as it bypasses
     * all ACL checks.
     *
     * @param SecurityUserInterface $user
     * @return User
     */
    public function loadUser(SecurityUserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException('Account is not supported.');
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * Loads a user by username
     *
     * It is strongly discouraged to call this method manually as it bypasses
     * all ACL checks.
     *
     * @extra:RunAs(roles="ROLE_SUPERADMIN")
     * @param string $username
     * @return SecurityUserInterface
     */
    public function loadUserByUsername($username)
    {
        $user = $this->findUserByUsername($username);

        if (!$user) {
            throw new UsernameNotFoundException(sprintf('No user with name "%s" was found.', $username));
        }

        return $user;
    }

    /**
     * {@inheritDoc}
     */
    public function updateCanonicalFields(UserInterface $user)
    {
        $user->setUsernameCanonical($this->usernameCanonicalizer->canonicalize($user->getUsername()));
        $user->setEmailCanonical($this->emailCanonicalizer->canonicalize($user->getEmail()));
    }

    /**
     * {@inheritDoc}
     */
    public function updatePassword(UserInterface $user)
    {
        if (0 !== strlen($password = $user->getPlainPassword())) {
            $user->setAlgorithm($this->algorithm);
            $encoder = $this->getEncoder($user);
            $user->setPassword($encoder->encodePassword($password, $user->getSalt()));
            $user->eraseCredentials();
        }
    }

    protected function getEncoder(UserInterface $user)
    {
        return $this->encoderFactory->getEncoder($user);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsClass($class)
    {
        return $class === $this->getClass();
    }
}
