<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 5%;"></th>
            <th style="width: 5%;">Mulai</th>
            <th style="width: 5%;">Selesai</th>
            <th style="width: 40%;">Nama Kegiatan</th>
            <th style="width: 45%;">Keterangan</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('pelaksanaan.show', ['pelaksanaan' => $item->id]) }}');">
                <td></td>
                <td>
                    <div class="text-center">{{ \Arins\Facades\Formater::date($item->startdt) }}</div>
                </td>
                <td>
                    <div class="text-center">{{ \Arins\Facades\Formater::date($item->enddt) }}</div>
                </td>
                <td>
                    <div>{{ $item->kegiatan->name }}</div>
                </td>
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->subject)) !!}</div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
