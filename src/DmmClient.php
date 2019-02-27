<?php

namespace Revolution\Dmm;

use Dmm\Dmm;

use Illuminate\Support\Traits\Macroable;

use Revolution\Dmm\Contracts\Factory;

class DmmClient implements Factory
{
    use Macroable;

    /**
     * @var Dmm
     */
    protected $dmm;

    /**
     * constructor.
     *
     * @param \Dmm\Dmm $dmm
     */
    public function __construct(Dmm $dmm)
    {
        $this->dmm = $dmm;
    }

    /**
     * @param array $config
     *
     * @return $this
     * @throws \Dmm\Exceptions\DmmSDKException
     */
    public function create(array $config)
    {
        $this->dmm = new Dmm($config);

        return $this;
    }

    /**
     * @return \Dmm\Dmm
     */
    public function dmm()
    {
        return $this->dmm;
    }
}
