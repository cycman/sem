<?php
/**
 * Created by PhpStorm.
 * User: cyc
 * Date: 2021/1/5
 * Time: 11:40
 */

namespace SEM\baidu;


class BDJsonEnvelop
{
    public $header;
    public $body;

    /**
     * @return unknown
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * @return unknown
     */
    public function getHeader() {
        return $this->header;
    }

    /**
     * @param unknown_type $body
     */
    public function setBody($body) {
        $this->body = $body;
    }

    /**
     * @param unknown_type $header
     */
    public function setHeader($header) {
        $this->header = $header;
    }
}