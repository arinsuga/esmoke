<?php

namespace Arins\Repositories\Pelaksanaan;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface PelaksanaanRepositoryInterface extends BaseRepositoryInterface
{
    function byCustom($filter, $take=null);
    function existEmployeeStartEnd($employeeId, $startdt, $enddt);
    function byJenis($id);
    function byKegiatan($id);
    function byStatus($statusId);
    function byStatusOpen();
    function byStatusClose();
    function byStatusCancel();
    function byStatusReject();
    function byStatusPending();
}