<?php

class Response
{
    public static function StatusMessage($status, $message)
    {
        $obj = new stdClass();
        $obj->status = $status;
        $obj->message = $message;
        return $obj;
    }
}
