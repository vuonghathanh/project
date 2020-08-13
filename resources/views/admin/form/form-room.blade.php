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
            <span class="section">Hotel Info</span>
            <div class="row">
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Room number<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text" name="room_number" required/>
                        @if($errors->has('room_number'))
                            <span class="text-danger">* {{$errors->first('room_number')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Floor<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="text" name="floor" required/>
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
                            <option value="0">Chọn hotel</option>
                            @foreach($hotels as $hotel)
                                <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('hotel'))
                            <span class="text-danger">* {{$errors->first('hotel')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Room type<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11 " >
                        <select class="form-control" id="type_select"   name="room_type">
                            <option value="0" selected>Chọn type</option>

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
                        <input class="form-control" type="number" name="price" required/>
                        @if($errors->has('price'))
                            <span class="text-danger">* {{$errors->first('price')}}</span>
                        @endif
                    </div>
                </div>
                <div class="field item form-group col-md-4 col-sm-4">
                    <label class="col-form-label col-md-5 col-sm-5  label-align">Number people<span
                            class="required">*</span></label>
                    <div class="col-md-11 col-sm-11">
                        <input class="form-control" type="number" name="number_people" required/>
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
                    <textarea name="description" id="editor" required></textarea>
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
    <script>
        $('#hotel_select').change(function () {
            var value = $('#hotel_select').val();
            var type = [];
            var id = [];
            var string = "";
            @foreach($hotels as $hotel)
            if (value === '{{$hotel->id}}') {
                @foreach($hotel->types_room as $type)
                type.push('{{$type->type}}');
                id.push('{{$type->id}}')
                @endforeach
            }
                @endforeach
            for (let i = 0; i < type.length; i++) {
                for (let j = 0; j < id.length; j++) {
                    string = string + "<option value=''>" + type[i] + "</option>";
                    break;
                }
            }
            $('#type-select').html(string);
            console.log(string)

        })
    </script>
@endsection
