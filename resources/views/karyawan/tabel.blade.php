<div class="box-header with-border">
        <form method="GET" action="{{url('karyawan')}}" accept-charset="UTF-8" id="cari">
        {!!csrf_field()!!}
        <div class="input-group" style="width: 200px;">
            <input type="text" class="form-control" name="search" value="{!! \Input::get('search')!!}">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
            </span>
        </div>
        </form>
</div>
<div class="table-responsive">
    <div class="box-body">
        <table class="table table-striped table-hover table-condensed table-bordered" id='tabel'>
            <thead class="bg-primary">
            <tr>
                <th>nama</th>
                <th>Umur</th>
            </tr>
            </thead>   
            <tbody>
            @foreach ($karyawans as $karyawan)
            <tr>
            	<td>{{$karyawan->nama}}</td>
            	<td>{{$karyawan->umur}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="box-footer clearfix">
  <div class="row">
    <div class="col-sm-6">
    </div>
    <div class="col-sm-6">
    	<?php echo $karyawans->appends(array('search' => Input::get('search')))->render(); ?>
    </div>
  </div>
</div>