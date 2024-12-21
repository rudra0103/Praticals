@include('adminnav')


    
<div class="container my-5">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5> Package</h5>
    </div>
      
      <div class="card-body">
        <form action="{{route('package.update',$package->_id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname"> package_name</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="bx bx-user"></i ></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="package_name"  aria-label="John Doe"  aria-describedby="basic-icon-default-fullname2" name="package_name" value="{{$package->package_name}}" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_desc</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="package_desc" name="package_desc" value="{{$package->package_desc}}"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_discount</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="package_discount" name="package_discount" value="{{$package->package_discount}}"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_price</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="package_price" name="package_price" value="{{$package->package_price}}"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_pic</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="file"  id="basic-icon-default-company" class="form-control" placeholder="package_pic" name="package_pic" value="{{$package->package_pic}}"/>
            </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">duration</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text" >
                    <i class="bx bx-buildings"></i></span>
                    {{-- <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="duration" name="duration"/> --}}
                    <select name="form-select" id="duration" >
                        <option value="3 days 4 night"
                            {{ $package->duration == "3 days 4 night" ? 'selected' : '' }}>
                            <option value="3 days 4 night"
                            {{ $package->duration == "4 days 5 night" ? 'selected' : '' }}>
                            <option value="4 days 5 night"
                            {{ $package->duration == "5 days 6 night" ? 'selected' : '' }}>
                            <option value="5 days 6 night"
                            {{ $package->duration == "7 days 8 night" ? 'selected' : '' }}>
                            <option value="7 days 8 night"
                            {{ $package->duration == "8 days 9 night" ? 'selected' : '' }}>
                            <option value="8 days 9 night"
                             {{ $package->duration == "9 days 10 night" ? 'selected' : '' }}>
                            <option value="9 days 10 night"
                             {{ $package->duration == "10 days 11 night" ? 'selected' : '' }}>
                            <option value="10 days 11 night">
                    </select>
                </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company"> route</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text" >
                        <i class="bx bx-buildings"></i></span>
                        <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="route" name="package_route" value="{{$package->route}}"/>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">detail_desc</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text" >
                            <i class="bx bx-buildings"></i></span>
                            <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="detail_desc" name="detail_desc" value="{{$package->detail_desc}}"/>
                        </div>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Category</label>
                            <select name="category" id="" class="form-control">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->category_name }}"
                                        {{ $package->category == $item->category_name ? 'selected' : '' }}>
                                        {{ $item->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        
                            <span class="text-danger">
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                            </div>
                        
                

             
         
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form

@include('adminfooter')