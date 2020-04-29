<?php

namespace App\Helpers;

class Helper
{
    /**
     * Avoir le nom du role de l'user
     *
     * $return string
     */
    public static function getRolename($roleid)
    {
        return config('variables.role')[$roleid];
    }

}
