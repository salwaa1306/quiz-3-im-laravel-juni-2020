@extends ('layouts.master')

@section('master')
<div>
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Artikel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/items" method="POST">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi Artikel</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi Artikel">
                  </div>
                  <div class="form-group">
                    <label for="slug">Slug Artikel</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slugc Artikel">
                  </div>
                  <div class="form-group">
                    <label for="tag">Tag Art</label>
                    <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag Artikel">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>

@endsection