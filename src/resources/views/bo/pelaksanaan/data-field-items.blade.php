@php (($fieldEnabled == true ? $disabled='' : $disabled='disabled'))

@if (isset($viewModel->data->id))
    <input type="hidden" name="id" id="id" value="{{ $viewModel->data->id }}">
@endif

<div class="card" style="margin-bottom: 20px; width: 50%;
margin-left: auto; margin-right:auto;">
    <div class="card-body">

        <div class="form-group">
            <label>Nama Karyawan</label>
            @if ($fieldEnabled == true)
            <select name="employee_id" class="form-control select2">
                    @foreach ($employee as $key => $item)

                    @if ($errors->any())
                        {{ ($item->id == old('employee_id') ? $selected = 'selected' : $selected = '') }}
                    @else
                        {{ ( $item->id == $viewModel->data->employee_id ) ? $selected = 'selected' : $selected = '' }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                    
                    @endforeach
                </select>
            @else
            <input type="hidden" name="employee_id" value="{{ $viewModel->data->employee_id }}" readonly>
            <div class="form-group">
                <input disabled type="text" value="{{ $viewModel->data->employee->name }}" class="form-control">
            </div>
            @endif
            <p class="text-red">{{ $errors->first('employee_id') }}</p>
        </div>

        <div class="form-group">
            <label>Kegiatan</label>
            @if ($fieldEnabled == true)
            <select name="kegiatan_id" class="form-control select2">
                    @foreach ($kegiatan as $key => $item)

                    @if ($errors->any())
                        {{ ($item->id == old('kegiatan_id') ? $selected = 'selected' : $selected = '') }}
                    @else
                        {{ ( $item->id == $viewModel->data->kegiatan_id ) ? $selected = 'selected' : $selected = '' }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                    
                    @endforeach
                </select>
            @else
            <input type="hidden" name="kegiatan_id" value="{{ $viewModel->data->kegiatan_id }}" readonly>
            <div class="form-group">
                <input disabled type="text" value="{{ $viewModel->data->employee->name }}" class="form-control">
            </div>
            @endif
            <p class="text-red">{{ $errors->first('kegiatan_id') }}</p>
        </div>

        <!-- Start Date -->
        <div class="form-group">
            <label>Tanggal Mulai s/d Selesai:</label>
            <div class="row">
                @if ($fieldEnabled == true)
                    <div class="input-group col-sm-12 col-md-6">
                    <input type="text" class="form-control date" name="startdt" id="startdt" value="{{ ( $errors->any() ? old('startdt') : Arins\Facades\Formater::date($viewModel->data->startdt) ) }}"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-clock"></i></div>
                    </div>
                    </div>
                @else
                    <div class="col-md-4 col-sm-12">
                    <input {{ $disabled }} type="text" id="startdt" name="startdt" class="form-control"
                    value="{{ ( $errors->any() ? old('startdt') : \Arins\Facades\Formater::date($viewModel->data->startdt) ) }}">
                    </div>
                @endif
                <p class="text-red">{{ $errors->first('startdt') }}</p>

                @if ($fieldEnabled == true)
                    <div class="input-group col-sm-12 col-md-6">
                    <input type="text" class="form-control date" name="enddt" id="enddt" value="{{ ( $errors->any() ? old('enddt') : Arins\Facades\Formater::date($viewModel->data->enddt) ) }}"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-clock"></i></div>
                    </div>
                    </div>
                @else
                    <div class="col-md-4 col-sm-12">
                    <input {{ $disabled }} type="text" id="enddt" name="enddt" class="form-control"
                    value="{{ ( $errors->any() ? old('enddt') : \Arins\Facades\Formater::date($viewModel->data->enddt) ) }}">
                    </div>
                @endif
                <p class="text-red">{{ $errors->first('enddt') }}</p>
                
            </div> <!-- end row -->
        </div> <!-- end form-group -->

      <!-- textarea -->
      <div class="form-group">
        <label>Keterangan</label>
        <textarea {{ $disabled }} id="subject" name="subject" class="form-control" rows="3" placeholder="">{{ ( $errors->any() ? old('subject') : $viewModel->data->subject ) }}</textarea>
        <p class="text-red">{{ $errors->first('subject') }}</p>
      </div>

    </div>
</div>


