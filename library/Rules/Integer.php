<?php
namespace Respect\Validation\Rules;

class Integer extends AbstractRule
{
    public function validate($input)
    {
        return is_numeric($input) && (int) $input == $input;
    }
}
