<?php
/**
 * Created by PhpStorm.
 * User: caoyangmin
 * Date: 2017/2/23
 * Time: 下午9:36
 */

namespace EzBpm\Process;


class Timer extends EventNode
{

    public function __construct($nodeName, $second){
        $this->second = $second;
        parent::__construct($nodeName, NullNode::class);
    }

    /**
     * @var int
     */
    private $second;
}