@extends('layout.admin-layout')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="x_content">
        <form class="" action="/admin/blogs" method="post" novalidate id="blog_form">
            @csrf
            <span class="section">Create Blogs</span>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Title<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" type="text" name="title" required="required"/>
                    @if($errors->has('title'))
                        <span class="text-danger">* {{$errors->first('title')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Description<span class="required">*</span></label>
                <div class="col-md-11 col-sm-11 ">
                    <textarea name="description" id="editor" required></textarea>
                    @if($errors->has('description'))
                        <span class="text-danger">* {{$errors->first('description')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Detail<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11 ">
                    <textarea name="detail" id="editor2" required></textarea>
                    @if($errors->has('detail'))
                        <span class="text-danger">* {{$errors->first('detail')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Author <span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11 ">
                    <input class="form-control" type="text"  name="author" required='required'>
                    @if($errors->has('author'))
                        <span class="text-danger">* {{$errors->first('author')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Thumbnail<span
                        class="required">*</span></label>
                <div>
                    <button type="button" id="upload_widget" class="btn btn-secondary" style="margin-left: 10px ">Click
                        to upload
                    </button>
                </div>
                <div class="col-md-6 col-sm-6 mt-2 thumbnails">

                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-1">
                        <button type='submit' class="btn btn-primary">Submit</button>
                        <button type='reset' class="btn btn-success">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myWidget = cloudinary.createUploadWidget({
                    // cloudName: 'dfrbrguff',
                    // uploadPreset: 'qb4oonrx',
                    cloudName: 'thanhdeptrai',
                    uploadPreset: 'tn5xxaam',
                    multiple: true,
                    form: '#blog_form',
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

            ClassicEditor
                .create(document.querySelector('#editor'),)
                .catch(error => {
                    console.error(error);
                });
            ClassicEditor
                .create(document.querySelector('#editor2'),)
                .catch(error => {
                    console.error(error);
                });

            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                var splittedImgName = imgName.split('.');
                var imgCode = splittedImgName[0];
                $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
            });
        })
    </script>
@endsection

