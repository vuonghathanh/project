@extends('layout.admin-layout')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="x_content">
        <form class="" action="/admin/blogs/{{$obj->id}}" method="post" novalidate id="edit_blog_form">
            @method('PUT')
            @csrf
            <span class="section">Create Blogs</span>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" type="text" name="title" required="required" value="{{$obj->title}}"/>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" id="editor" rows="8"
                              name="description">{!! $obj->description !!}</textarea>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Detail<span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <textarea class="form-control" id="editor2" rows="8"
                              name="details">{!! $obj->description !!}</textarea>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Author <span
                        class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input  class="form-control" type="text" class='number' name="author" required='required'
                           value="{{$obj->author}}"></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Thumbnail<span
                        class="required">*</span></label>
                <div>
                    <button type="button" id="upload_widget" class="btn btn-secondary" style="margin-left: 10px ">Click
                        to upload
                    </button>
                </div>
                <div class="col-md-6 col-sm-6 mt-2 thumbnails">
                    <ul class="cloudinary-thumbnails">
                        @foreach($obj->preview_photos as $preview)
                            <li class="cloudinary-thumbnail active">
                                <img src="{{$preview}}" alt="">
                                <a href="javascript:void(0)" class="cloudinary-delete">x</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <button type='submit' class="btn btn-primary">Submit</button>
                        <button type='reset' class="btn btn-success">Reset</button>
                    </div>
                </div>
            </div>
            @foreach($obj->photo_ids as $id)
                <input type="hidden" name="thumbnails[]" data-cloudinary-public-id="{{$id}}" value="{{$id}}">
            @endforeach
        </form>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myWidget = cloudinary.createUploadWidget({
                    cloudName: 'thanhdeptrai',
                    uploadPreset: 'tn5xxaam',
                    multiple: true,
                    form: '#edit_blog_form',
                    fieldName: 'thumbnails[]',
                    thumbnails: '.thumbnails'
                }, (error, result) => {
                    if (!error && result && result.event === "success") {
                        var inputValues = document.querySelectorAll('input[name="thumbnails[]"]');
                        for (let i = 0; i < inputValues.length; i++) {
                            inputValues[i].value = inputValues[i].getAttribute('data-cloudinary-public-id')
                        }
                    }
                }
            )
            document.getElementById("upload_widget").addEventListener("click", function () {
                myWidget.open();
            }, false);



            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                var splittedImgName = imgName.split('.');
                var imgCode = splittedImgName[0];
                $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
                $(this).parent().remove();
            });
        })
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

