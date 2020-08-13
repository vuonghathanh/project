@extends('layout.admin-layout')
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <div class="x_content">
        <form class="" action="/admin/rooms" method="post" id="hotel_form" novalidate>
            @csrf
            <span class="section">Room Info</span>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Room number<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text" name="room_number" value="{{$obj->room_number}}" required/>
                        @if($errors->has('room_number'))
                            <span class="text-danger">* {{$errors->first('room_number')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Floor<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text" name="floor" value="{{$obj->floor}}" required/>
                        @if($errors->has('floor'))
                            <span class="text-danger">* {{$errors->first('floor')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Hotel<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <select class="form-control" id="hotel_select" name="hotel">
                            <option value="{{$obj->hotel->id}}">{{$obj->hotel->name}}</option>
                        </select>
                        @if($errors->has('hotel'))
                            <span class="text-danger">* {{$errors->first('hotel')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Room type<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <select class="form-control" id="type_select" name="room_type">
                            <option value="0">Chọn type</option>
                            @foreach($obj->hotel->types_room as $type)
                                <option value="{{$type->id}}" {{$type->id == $obj->id ? 'selected':''}}>{{$type->type}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('room_type'))
                            <span class="text-danger">* {{$errors->first('room_type')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Price<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="number" name="price" value="{{$obj->price}}" required/>
                        @if($errors->has('price'))
                            <span class="text-danger">* {{$errors->first('price')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Number people<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="number" name="number_people" value="{{$obj->number_people}}" required/>
                        @if($errors->has('number_people'))
                            <span class="text-danger">* {{$errors->first('number_people')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-1 col-sm-1  label-align">Description<span
                        class="required">*</span></label>
                <div class="col-md-11 col-sm-11">
                    <textarea class="form-control" id="editor" rows="8"
                              name="description">{!! $obj->description !!}</textarea>
                    @if($errors->has('description'))
                        <span class="text-danger">* {{$errors->first('description')}}</span>
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

            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                var splittedImgName = imgName.split('.');
                var imgCode = splittedImgName[0];
                $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
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
    </script>
@endsection
