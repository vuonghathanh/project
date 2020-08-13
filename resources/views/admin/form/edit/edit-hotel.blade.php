@extends('layout.admin-layout')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="x_content">
        <form class="" action="/admin/hotels/{{$obj->id}}" method="post" id="edit_hotel_form" novalidate>
            @method('PUT')
            @csrf
            <span class="section">Hotel Info</span>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Name<span class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" name="name" type="text" value="{{$obj->name}}" required="required"/>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Address<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" name="address" value="{{$obj->address}}"  required="required" type="text"/></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Description<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <textarea class="form-control" id="editor" rows="8"
                              name="description">{!! $obj->description !!}</textarea>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Email<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <input class="form-control" type="email" value="{{$obj->email}}"  name="email" required/>
                </div>
            </div>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4" >
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Start<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <select class="form-control" id="sel1"  name="star">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-4 col-sm-4  label-align">Main phone<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text" value="{{$obj->main_phone_number}}"  name="phone"  required/>
                    </div>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Thumbnail<span
                        class="required">*</span></label>
                <div>
                    <button type="button" id="upload_widget" class="btn btn-secondary" style="margin-left: 10px ">Click to upload</button>
                </div>
                <div class="col-md-6 col-sm-6 mt-2 thumbnails" >
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
                    <div class="col-md-6 offset-md-1">
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
                    multiple:true,
                    form:'#edit_hotel_form',
                    fieldName:'thumbnails[]',
                    thumbnails:'.thumbnails'
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
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                var splittedImgName = imgName.split('.');
                var imgCode = splittedImgName[0];
                $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
                $(this).parent().remove();
            });
        })
    </script>
@endsection
