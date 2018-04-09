<?php
namespace Respect\Validation\Rules;

class Str extends AbstractRule
{
    public function validate($input)
    {
        return is_string($input);
    }
}
