<?php

namespace Arins\Repositories\Kegiatan;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface KegiatanRepositoryInterface extends BaseRepositoryInterface
{
    public function byJenis($id);
}