@extends('layout.detail-hotel-layout')
@section('title')
    <title>Liên hệ với chúng tôi</title>
@endsection
@section('content')
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
    <nav style="min-height: 900px">
        <div class="container">
            <div class="row" style="margin-top: 200px">
                <div class="col-12">
                    <h1 class="section" style="text-align: center;margin-top: -100px">Create Blogs</h1>
                </div>
                <div class="col-8">
                    <form class="" action="/store-blog" method="post" novalidate id="blog_form">
                        @csrf
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
                        </div>
                        <div class="col-md-12 col-sm-12 mt-2 thumbnails">

                        </div>
                        <div class="ln_solid" style="margin-top: 100px;margin-left: -70px;">
                            <div class="form-group">
                                <div class="col-md-6 offset-md-1">
                                    <button type='submit' class="btn btn-primary">Submit</button>
                                    <button type='reset' class="btn btn-success">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4" style="margin-top: 60px">
                    <h3>Liên Hệ Với Chúng Tôi</h3>
                    <p> Để có thể đáp ứng được nhu cầu và các ý kiến đóng góp của mọi người một cách nhanh chóng thì vui lòng nhập đầy đủ các thông tin cần thiết với chúng tôi để có thể được giải đáp mọi thắc mắc cũng như nhu cầu của mọi người.</p>
                    <br>
                    <h3>Cần Giúp Đỡ?</h3>
                    <p>Nếu trong trường hợp mọi người cần giúp đỡ hay có thắc mắc gì và cần giải đáp chúng tôi sẽ hỗ trợ mọi người một các chu đáo nhất có thể.Điều đó giúp mọi người khi sử dụng dịch vụ có thể cảm thấy an tâm khi nhận được sự hỗ trợ chu đáo để được trải nhiệm dịch vụ một cách thoải mái nhất.</p>
                    <br>
                    <br>
                    <h3>Lưu ý khi đăng bài!</h3>
                    <p>Khi đăng bài thông tin cần phải chính xác một cách tuyệt đối để tránh việc làm mất thời gian và gây sự bức xúc cho du khách làm ảnh hưởng đến sự uy tín của trang web.
                     Mọi bài viết trước khi được đăng lên trang chính sẽ phải trải qua sự kiểm duyệt chặt chẽ của chúng tôi. Những bài viết không đạt yêu cầu sẽ bị loại bỏ.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </nav>
@endsection
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
