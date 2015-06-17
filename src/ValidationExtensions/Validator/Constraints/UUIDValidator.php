<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 16/06/15
 * Time: 16:06
 */

namespace ValidationExtensions\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class UUIDValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^[a-z0-9]{16}(?:,*[a-z0-9]{16})*$/i', $value, $matches)) {
            $this->context->addViolation($constraint->message, array('%string%' => $value));
        }
    }
}