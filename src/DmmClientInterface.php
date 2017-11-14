<?php

namespace Revolution\Dmm;

use Dmm\Dmm;

interface DmmClientInterface
{
    /**
     * @param array $config
     *
     * @return $this
     */
    public function create(array $config);

    /**
     * @return \Dmm\Dmm
     */
    public function dmm();
}
