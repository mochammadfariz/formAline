@include('layouts.includes.header2')
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
        </div>


        <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <h3>
                            Ajukan Pertanyaan
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6" > 
                        <label for="form19">Channel :</label> 
                        <select class="form-control" id="sel1" name="sellist1">
                                <option selected>Teknik Informatika UG</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6"> 
                        <label for="form20">Matakuliah :</label> 
                        <select class="form-control" id="sel1" name="sellist1">
                                <option selected>Algoritma Pemrogaman Paralel</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="form16"><b>Judul</b></label> 
                        <input type="text" class="form-control" id="form16" value="Parallelisasi Algoritma Sieve of Eratothenes" >
                        <span style="font-size :70%;">Terdapat 20 pertanyaan serupa <a href=""> Lihat</a></span>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                              
                    </div>
                </div>
                <div class="row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Tag</label>
                            <input type="text" class="form-control" id="form16" placeholder="Contoh : Bahasa Basic, RPL, Algoritma" >
                                  
                        </div>
                </div>
                <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-info">Kembali</button>
                        </div>
                        <div class="col-4">
                            
                        </div>
                        <div class="col-4">
                                <button  type="submit" class="btn btn-info">Tanyakan</button>
                        </div>
                </div>
        </div>

        <div class="col">
        </div>
    </div>
</div>

@endsection

@section('script')
    <!-- CKEditor init -->
<script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
<script>
  $('textarea[name=description]').ckeditor({
    height: 300,
    filebrowserImageBrowseUrl: route_prefix + '?type=Images',
    filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
    filebrowserBrowseUrl: route_prefix + '?type=Files',
    filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
  });
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
 var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
</script>
<script>
        // {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
      </script>
      <script>
        $('#lfm').filemanager('image', {prefix: route_prefix});
        $('#lfm2').filemanager('file', {prefix: route_prefix});
      </script>
    
      <script>
        $(document).ready(function(){
    
          // Define function to open filemanager window
          var lfm = function(options, cb) {
              var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
              window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
              window.SetUrl = cb;
          };
    
        });
      </script>
      <script src="{{ asset('static/bower_components/jquery/dist/jquery.min.js') }}"></script>
@endsection