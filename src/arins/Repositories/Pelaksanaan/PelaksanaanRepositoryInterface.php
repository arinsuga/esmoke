<?php

namespace Arins\Repositories\Pelaksanaan;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface PelaksanaanRepositoryInterface extends BaseRepositoryInterface
{
    public function byJenis($id);
    public function byKegiatan($id);
}