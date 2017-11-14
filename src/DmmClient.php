<?php

namespace Revolution\Dmm;

use Dmm\Dmm;

use Illuminate\Support\Traits\Macroable;

class DmmClient implements DmmClientInterface
{
    use Macroable;

    /**
     * @var Dmm
     */
    protected $dmm;

    /**
     * constructor.
     *
     * @param Dmm $dmm
     */
    public function __construct(Dmm $dmm)
    {
        $this->dmm = $dmm;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
    public function create(array $config)
    {
        $this->dmm = new Dmm($config);

        return $this;
    }

    /**
     * @return Dmm
     */
    public function dmm()
    {
        return $this->dmm;
    }
}
