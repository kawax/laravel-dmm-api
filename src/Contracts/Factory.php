<?php

namespace Revolution\Dmm\Contracts;

interface Factory
{
    /**
     * @param array $config
     *
     * @return $this
     * @throws \Dmm\Exceptions\DmmSDKException
     */
    public function create(array $config);

    /**
     * @return \Dmm\Dmm
     */
    public function dmm();
}
