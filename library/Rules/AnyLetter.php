<?php
namespace Respect\Validation\Rules;

class AnyLetter extends AbstractRule
{
    public function validate($input)
    {
        if (preg_match('/^[\p{L} -]*$/u', $input)) {
            return true;
        } else {
            return false;
        }
    }
}