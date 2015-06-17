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

class UUID3Validator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^[a-f0-9]{8}-?[a-f0-9]{4}-?3[a-f0-9]{3}-?[89ab][a-f0-9]{3}-?[a-f0-9]{12}$/i', $value, $matches)) {
            $this->context->addViolation($constraint->message, array('%string%' => $value));
        }
    }
}