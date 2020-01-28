<?php


namespace classes;


class Token
{
// Константа без модификатора по умолчанию “public”
    public const PUBLIC_CONST = 0;

    // Константы с различной областью видимости
    private const PRIVATE_CONST = 0;
    protected const PROTECTED_CONST = 0;
    public const PUBLIC_CONST_TWO = 0;

// Весь список имеет одну область видимости
    private const FOO = 1, BAR = 2;

}