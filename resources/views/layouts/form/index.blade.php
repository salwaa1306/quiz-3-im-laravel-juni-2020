@extends ('layouts.master')

@section('master')
<div>
    <h1>DATA ARTIKEL</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Fixed Header Table</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Slug</th>
                        <th>Tag</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artikel as $key => $items)
                    <tr>
                        <td> {{ $items-> id }} </td>
                        <td> {{ $items-> judul }} </td>
                        <td> {{ $items-> Isi }} </td>
                        <td> {{ $items-> slug }} </td>
                        <td> {{ $items-> tag}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>

@endsection