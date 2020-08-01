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
            <select name="categoryId" id="">
                @foreach($listCategory as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            Price <input type="text" name="price">
        </div>
        <div class="form-group">
            <label for="inputAddress">Thumbnail</label>
            <input type="hidden" name="thumbnail">
            <div>
                <button type="button" id="upload_widget" class="btn btn-secondary">Click to upload</button>
            </div>
            <div id="preview-thumbnail" class="mt-2">

            </div>
            @if ($errors->has('thumbnail'))
                <span class="text-danger">* {{$errors->first('thumbnail')}}</span>
            @endif
        </div>
        <div>
            Description <input type="text" name="description">
        </div>
{{--        <div>--}}
{{--            Colour--}}
{{--            <select name="colour" id="">--}}
{{--                @foreach($cate as $farm)--}}
{{--                    <option value="{{$farm->frameShape}}">{{$farm->frameShape}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            FrameShape--}}
{{--            <select name="frameShape" id="">--}}
{{--                @foreach($cate as $farm)--}}
{{--                    <option value="{{$farm->frameSize}}">{{$farm->frameSize}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            FrameSize--}}
{{--            <select name="frameSize" id="">--}}
{{--                @foreach($cate as $farm)--}}
{{--                    <option value="{{$farm->colour}}">{{$farm->colour}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            FrameType--}}
{{--            <select name="frameType" id="">--}}
{{--                @foreach($cate as $farm)--}}
{{--                    <option value="{{$farm->frameType}}">{{$farm->frameType}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myWidget = cloudinary.createUploadWidget({
                    cloudName: 'adu13',
                    uploadPreset: 'f59blvj3',
                    multiple: true,
                    form: '#product_form',
                    fieldName: 'thumbnails[]',
                    thumbnails: '.thumbnails'
                }, (error, result) => {
                    if (!error && result && result.event === "success") {
                        //result.info.public_id
                        console.log('Done! Here is the image info: ', result.info.url);
                        var imgCode = '<img src="' + result.info.url + '" width="200px" class="img-thumbnail">';
                        document.getElementById('preview-thumbnail').innerHTML = imgCode;
                        document.querySelector('input[name="thumbnail"]').value = result.info.public_id;
                    }
                }
            )
            document.getElementById("upload_widget").addEventListener("click", function () {
                myWidget.open();
            }, false);

            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        })
    </script>
@endsection
