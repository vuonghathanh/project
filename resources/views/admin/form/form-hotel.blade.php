@extends('layout.admin-layout')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="x_content">
        <form class="" action="/admin/hotels" method="post" id="hotel_form" novalidate>
            @csrf
            <span class="section">Hotel Info</span>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Name<span class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" name="name" type="text" required="required"/>
                    @if($errors->has('name'))
                        <span class="text-danger">* {{$errors->first('name')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Address<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" name="address" required="required" type="text"/>
                    @if($errors->has('address'))
                        <span class="text-danger">* {{$errors->first('address')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Description<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <textarea name="description" id="editor" required></textarea>
                    @if($errors->has('description'))
                        <span class="text-danger">* {{$errors->first('description')}}</span>
                    @endif
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Email<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" type="email" name="email" required/>
                    @if($errors->has('email'))
                        <span class="text-danger">* {{$errors->first('email')}}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Start<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <select class="form-control" id="sel1" name="star">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        @if($errors->has('star'))
                            <span class="text-danger">* {{$errors->first('star')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-4 col-sm-4  label-align">Main phone<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text" name="phone" required/>
                        @if($errors->has('phone'))
                            <span class="text-danger">* {{$errors->first('phone')}}</span>
                        @endif
                    </div>
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
                    cloudName: 'dfrbrguff',
                    uploadPreset: 'qb4oonrx',
                    multiple: true,
                    form: '#hotel_form',
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
