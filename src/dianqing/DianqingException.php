<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 19:55
 */

namespace SEM\dianqing;


class DianqingException extends \Exception
{


    /**
     * DianjingException constructor.
     * @param $failures
     */
    public function __construct($failures)
    {
        $messages = [];
        $codes = [];
        foreach ($failures as $f) {
            $messages[] = $f->message;
            $codes[] = $f->code;
        }

        parent::__construct(implode("\n", $messages), implode("|", $codes));
    }
}