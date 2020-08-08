@extends('admin.admin_layout')
@section('content')
    <h1>Product form</h1>
    <form action="/admin/products" method="post" id="product_form">
        @csrf
        <div>
            Name <input type="text" name="name">
        </div>
        <div>
            Category
            <select name="category_id" id="">
                @foreach($listCategory as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            Price <input type="text" name="price">
        </div>
        <div class="form-group">
            <div>
                <button type="button" id="upload_widget" class="btn btn-secondary">Click to upload</button>
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
        <div>
            Description <input type="text" name="description">
        </div>
            <div>
                Brand
                <select name="brand_id" id="">
                    @foreach($listBrand as $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                Created By
                <select name="created_by" id="">
                    @foreach($listAccount as $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                </select>
            </div>
        <br>
            <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
        </div>
    </form>

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
