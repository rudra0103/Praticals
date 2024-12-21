@include('adminnav')
<div class="container">
    <form action="{{route('category.update',$category->_id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Category name</label>
            <input type="text" value="{{$category->category_name}}" class="form-control" name="category_name" id="" aria-describedby="helpId" placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <span>@error('category_name')
            {{$message}}
            
        @enderror</span>
        <div class="mb-3">
            <label for="" class="form-label">Category pic</label>
            <input type="file" value="{{$category->category_pic}}" class="form-control" name="category_pic" id="" aria-describedby="helpId" placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="update" class="btn btn-danger">Update</button>

    </form>
</div>

@include('adminfooter')
