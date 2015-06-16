<?php
/**
 * Created by PhpStorm.
 * User: alexandre
 * Date: 16/06/15
 * Time: 16:06
 */

namespace ValidationExtensions\Validator\Constraints;

use Symfony\Component\Validator\Constraint;


/**
 * @Annotation
 */
class IsUUID extends Constraint
{
    public $message = 'The string "%string%" is not a valid uuid.';
}