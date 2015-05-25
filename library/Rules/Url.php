<?php
namespace Respect\Validation\Rules;
class Url extends AbstractRule
{
    public function validate($input)
    {
        $pattern = "/\b(?:(?:https?|ftp|skype):(\/\/)?|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
        if ( preg_match($pattern, $input) ) {
            return true;
        } else {
            return false;
        }
    }
}