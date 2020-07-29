@extends('admin.admin_layout')

@section('content')
    <h1>Product form</h1>
    <form action="/product/create" method="post">
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
            <input type="submit" value="Save">
            <input type="reset" value="Reset">
        </div>
    </form>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myWidget = cloudinary.createUploadWidget({
                    cloudName: 'adu13',
                    uploadPreset: 'f59blvj3'
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
