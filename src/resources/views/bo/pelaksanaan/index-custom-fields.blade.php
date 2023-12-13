@php (($fieldEnabled == true ? $disabled='' : $disabled='disabled'))
<div class="card" style="margin-bottom: 20px; width: 50%;
margin-left: auto; margin-right:auto;">
    <div class="card-body">

        <div class="form-group">
            <label>Nama Karyawan</label>
            <select name="employee_id" class="form-control select2">
                <option selected value="">All</option>
                @php ($selected = '')
                @foreach ($employee as $key => $item)

                    @if ($errors->any())
                        {{ ($item->id == old('employee_id') ? $selected = 'selected' : $selected = '') }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                
                @endforeach
            </select>
            <p class="text-red">{{ $errors->first('employee_id') }}</p>
        </div> <!-- end form-group -->

        <div class="form-group">
            <label>Kegiatan</label>
            <select name="kegiatan_id" class="form-control select2">
                <option selected value="">All</option>
                @php ($selected = '')
                @foreach ($kegiatan as $key => $item)

                    @if ($errors->any())
                        {{ ($item->id == old('kegiatan_id') ? $selected = 'selected' : $selected = '') }}
                    @endif
                    <option {{ $selected }} value="{{ $item->id }}">{{ $item->name }}</option>
                
                @endforeach
            </select>
            <p class="text-red">{{ $errors->first('kegiatan_id') }}</p>
        </div> <!-- end form-group -->

        <!-- Start Date -->
        <div class="form-group">
            <label>Start/End Date:</label>
            <div class="row">
                <div class="input-group col-sm-12 col-md-6">
                    <input type="text" class="form-control date" name="startdt" id="startdt"/>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>

                <div class="input-group col-sm-12 col-md-6">
                    <input type="text" class="form-control date" name="enddt" id="enddt"/>
                    <div class="input-group-append" >
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end form-group -->

        <!-- text input -->
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" id="subject" name="subject" class="form-control">
            <p class="text-red">{{ $errors->first('subject') }}</p>
        </div> <!-- end form-group -->

    </div> <!-- end card-body -->
</div> <!-- end card -->


