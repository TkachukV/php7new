<?php


namespace classes;


class Bar
{
    public string $name;
    protected int $amount;
    private Foo $foo;

    public function __construct($name, $amount, $foo = null)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->foo = $foo;
    }

}