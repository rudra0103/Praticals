@include('adminnav')
<div class="container">
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Category name</label>
            <input type="text" class="form-control" name="category_name" id="" aria-describedby="helpId" placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <span>@error('category_name')
            {{$message}}
            
        @enderror</span>
        <div class="mb-3">
            <label for="" class="form-label">Category pic</label>
            <input type="file" class="form-control" name="category_pic" id="" aria-describedby="helpId" placeholder="" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <button type="submit" class="btn btn-danger">Insert</button>

    </form>
</div>

@include('adminfooter')
