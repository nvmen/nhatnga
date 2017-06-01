@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <textarea id="my-editor" name="content" class="form-control">
</textarea>

    <script>

         var url1 = '{{route('backend.show.media')}}';
         var url2 = '{{route('backend.upload.media')}}';
        var options = {
            filebrowserImageBrowseUrl: url1+'?type=Images',
            filebrowserImageUploadUrl: url1+'/upload?type=Images&_token=',
            filebrowserBrowseUrl: url1+'?type=Files',
            filebrowserUploadUrl: url1+'/upload?type=Files&_token={{ csrf_token() }}'
        };
        CKEDITOR.replace('my-editor', options);
    </script>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
@stop

