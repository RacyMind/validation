<?php
namespace Respect\Validation\Exceptions;

class AnyLetterException extends ValidationException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must contain only letters',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not contain only letters',
        ],
    ];
}
