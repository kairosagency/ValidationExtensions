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
        $badUUID = "AZERTYYUYIUYUYUYU";
        $violations = $this->validator->validate($badUUID, new Assert\IsUUID());
        $this->assertCount(1, $violations);
    }

    public function testIsUUID()
    {
        $badUUID = "4EB4008C-0104-4A6C-A2B0-5BA4CC73742F";
        $violations = $this->validator->validate($badUUID, new Assert\IsUUID());
        $this->assertCount(1, $violations);
    }
}