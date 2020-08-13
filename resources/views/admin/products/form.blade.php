@extends('admin.admin_layout')
@section('content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        THÊM SẢN PHẨM
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="/admin/products" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="product">Tên Sản Phẩm</label>
                                    <input type="text" class="form-control" id="" placeholder="" name="name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">* {{$errors->first('name')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Thuộc Danh Mục </label>
                                    <select name="category_id" id="">
                                        @foreach($listCategory as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá </label>
                                    <input type="text" class="form-control" id="" placeholder="" name="price">
                                    @if ($errors->has('price'))
                                        <span class="text-danger">* {{$errors->first('price')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label for="thumbnail">Ảnh </label>
                                        <button type="button" id="upload_widget" class="btn btn-secondary">Click to
                                            upload
                                        </button>
                                    </div>
                                    <div class="thumbnails">
                                        {{--                <ul class="cloudinary-thumbnails">--}}
                                        {{--                    @foreach($product->thumbnails as $preview)--}}
                                        {{--                    <li class="cloudinary-thumbnail active">--}}
                                        {{--                        <img src="{{$preview}}" alt="">--}}
                                        {{--                        <a href="javascript:voi(0)" class="cloudinary-delete">x</a>--}}
                                        {{--                    </li>--}}
                                        {{--                    @endforeach--}}
                                        {{--                </ul>--}}
                                    </div>
                                    @if ($errors->has('thumbnail'))
                                        <span class="text-danger">* {{$errors->first('thumbnail')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description">Mô Tả Sản Phẩm</label>
                                    <textarea style="height: 150px;" type="text" class="form-control" id=""
                                              placeholder="" name="description"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">* {{$errors->first('description')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="brand">Hãng</label>
                                    <select name="brand_id" id="">
                                        @foreach($listBrand as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="created_by">Người Tạo</label>
                                    <select name="created_by" id="">
                                        @foreach($listAccount as $cate)
                                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-info">Save</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'adu13',
                uploadPreset: 'f59blvj3',
                multiple: true,
                form: '#product_form',
                fieldName: 'thumbnails[]',
                thumbnails: '.thumbnails'
            }, function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the image info: ', result.info.url);
                    var arrayThumnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
                    for (let i = 0; i < arrayThumnailInputs.length; i++) {
                        arrayThumnailInputs[i].value = arrayThumnailInputs[i].getAttribute('data-cloudinary-public-id');
                    }
                }
            }
        );
        $('#upload_widget').click(function () {
            myWidget.open();
        })
        // xử lý js trên dynamic content.
        $('body').on('click', '.cloudinary-delete', function () {
            var splittedImg = $(this).parent().find('img').attr('src').split('/');
            var imgName = splittedImg[splittedImg.length - 1];
            imgName = imgName.replace('.jpg', '');
            $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
        });
    </script>

    <script>
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
