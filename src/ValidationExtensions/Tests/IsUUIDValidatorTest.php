<?php

namespace NotificationService\Tests;

use Symfony\Component\Validator\Validation;
use ValidationExtensions\Validator\Constraints AS Assert;

class IsUUIDValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Symfony\Component\Validator\ValidatorInterface
     */
    protected $validator;

    public function setUp()
    {
        $this->validator = Validation::createValidator();
    }

    public function testIsNotUUID()
    {
        $badUUID = "e80f5e74-1511-11e5-b89d-080027f";
        $violations = $this->validator->validate($badUUID, new Assert\UUID());
        $this->assertCount(1, $violations);
    }

    public function testIsUUID()
    {
        $badUUID = "e80f5e74-1511-11e5-b89d-080027fca326";
        $violations = $this->validator->validate($badUUID, new Assert\UUID());
        $this->assertCount(0, $violations);
    }

    public function testIsNotUUID1()
    {
        $badUUID = "e80f5e74-1511-21e5-189d-080027fca326";
        $violations = $this->validator->validate($badUUID, new Assert\UUID1());
        $this->assertCount(1, $violations);
    }

    public function testIsUUID1()
    {
        $badUUID = "e80f5e74-1511-11e5-b89d-080027fca326";
        $violations = $this->validator->validate($badUUID, new Assert\UUID1());
        $this->assertCount(0, $violations);
    }

    public function testIsNotUUID3()
    {
        $badUUID = "e80f5e74-1511-21e5-189d-080027fca326";
        $violations = $this->validator->validate($badUUID, new Assert\UUID3());
        $this->assertCount(1, $violations);
    }

    public function testIsUUID3()
    {
        $badUUID = "e80f5e74-1511-31e5-b89d-080027fca326";
        $violations = $this->validator->validate($badUUID, new Assert\UUID3());
        $this->assertCount(0, $violations);
    }

    public function testIsNotUUID4()
    {
        $badUUID = "e80f5e74-1511-21e5-189d-080027fca326";
        $violations = $this->validator->validate($badUUID, new Assert\UUID4());
        $this->assertCount(1, $violations);
    }

    public function testIsUUID4()
    {
        $badUUID = "4172e6db-edd8-49e1-ad49-4f797f1cb526";
        $violations = $this->validator->validate($badUUID, new Assert\UUID4());
        $this->assertCount(0, $violations);
    }
}