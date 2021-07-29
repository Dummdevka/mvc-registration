<?php

namespace application\lib;

class Session
{
    public static function sessionStart($user)
    {
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['photo_url'] = $user['photo_url'];
        $_SESSION['pass'] = $user['pass'];
        return TRUE;
    }
    public static function sessionEnd()
    {
        ini_set('session.gc_max_lifetime', 0);
        ini_set('session.gc_probability', 1);
        ini_set('session.gc_divisor', 1);    // unset $_SESSION variable for the run-time 
        session_destroy();
    }
    public static function lastActivity()
    {
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
            // last request was more than 30 minutes ago
            self::sessionEnd();   // destroy session data in storage
        }
        $_SESSION['LAST_ACTIVITY'] = time();
    }
}
