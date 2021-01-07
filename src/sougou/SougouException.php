<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/7
 * Time: 12:59
 */

namespace Sem\sougou;


class SougouException extends \Exception
{

    /**
     * SougouException constructor.
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