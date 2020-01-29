<?php


namespace classes;


class IsCountable
{
    public function isCountableVar($var)
    {
        if (is_countable($var)) {
            echo count($var);
        } else {
            echo "$var is not countable";
        }
    }
}