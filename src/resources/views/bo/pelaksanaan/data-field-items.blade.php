@php (($fieldEnabled == true ? $disabled='' : $disabled='disabled'))
<div class="card" style="margin-bottom: 20px; width: 50%;
margin-left: auto; margin-right:auto;">
    <div class="card-body">

      <!-- text input -->
      <div class="form-group">
        <label>Kegiatan (ganti dengan dropdown)</label>
        <input {{ $disabled }} type="text" id="name" name="name" class="form-control" value="{{ ( $errors->any() ? old('name') : $viewModel->data->name ) }}">
        <p class="text-red">{{ $errors->first('name') }}</p>
      </div>

      <!-- textarea -->
      <div class="form-group">
        <label>Keterangan</label>
        <textarea {{ $disabled }} id="subject" name="subject" class="form-control" rows="3" placeholder="">{{ ( $errors->any() ? old('subject') : $viewModel->data->subject ) }}</textarea>
        <p class="text-red">{{ $errors->first('subject') }}</p>
      </div>


      <div class="form-group">
        <label>Tanggal Mulai</label>
        <div class="row">
          @if ($fieldEnabled == true)
            <div class="input-group col-sm-12 col-md-6">
              <input type="text" class="form-control date" name="startdt" id="startdt" value="{{ ( $errors->any() ? old('startdt') : Arins\Facades\Formater::timeshort($viewModel->data->startdt) ) }}"/>
              <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-clock"></i></div>
              </div>
            </div>
          @else
            <div class="col-md-4 col-sm-12">
              <input {{ $disabled }} type="text" id="startdt" name="startdt" class="form-control"
              value="{{ ( $errors->any() ? old('startdt') : \Arins\Facades\Formater::time($viewModel->data->startdt) ) }}">
            </div>
          @endif
        </div>
        <p class="text-red">{{ $errors->first('startdt') }}</p>
      </div> <!-- end form-group -->

      <div class="form-group">
        <label>Tanggal Selesai</label>
        <div class="row">
          @if ($fieldEnabled == true)
            <div class="input-group col-sm-12 col-md-6">
              <input type="text" class="form-control date" name="enddt" id="enddt" value="{{ ( $errors->any() ? old('enddt') : Arins\Facades\Formater::timeshort($viewModel->data->enddt) ) }}"/>
              <div class="input-group-append">
                <div class="input-group-text"><i class="fa fa-clock"></i></div>
              </div>
            </div>
          @else
            <div class="col-md-4 col-sm-12">
              <input {{ $disabled }} type="text" id="enddt" name="enddt" class="form-control"
              value="{{ ( $errors->any() ? old('enddt') : \Arins\Facades\Formater::time($viewModel->data->enddt) ) }}">
            </div>
          @endif
        </div>
        <p class="text-red">{{ $errors->first('enddt') }}</p>
      </div> <!-- end form-group -->

    </div>
</div>


