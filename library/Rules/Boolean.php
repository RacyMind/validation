<?php
namespace Respect\Validation\Rules;

class Boolean extends AbstractRule
{
    public function validate($input)
    {
        return is_bool($input);
    }
}
