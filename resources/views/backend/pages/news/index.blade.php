@extends('layouts.backend')
@section('pageTitle', 'Services')
@section('content')
    <textarea id="my-editor" name="content" class="form-control">
</textarea>

    <script>

        var options = {
            filebrowserImageBrowseUrl: '/en/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/en/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/en/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/en/laravel-filemanager/upload?type=Files&_token={{ csrf_token() }}'
        };
        CKEDITOR.replace('my-editor', options);
    </script>
@stop

