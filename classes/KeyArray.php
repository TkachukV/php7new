<?php


namespace classes;


class KeyArray
{

    public function getFirstKey($arr)
    {
        return array_key_first($arr);
    }

    public function getLastKey($arr)
    {
        return array_key_last($arr);
    }

}