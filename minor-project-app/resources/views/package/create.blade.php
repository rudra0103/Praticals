@include('adminnav')

    
<div class="container my-5">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5> Package</h5>
    </div>
      
      <div class="card-body">
        <form action="{{route('package.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-fullname"> package_name</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-fullname2" class="input-group-text">
                <i class="bx bx-user"></i ></span>
              <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="package_name"  aria-label="John Doe"  aria-describedby="basic-icon-default-fullname2" name="package_name" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_desc</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="package_desc" name="package_desc"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_discount</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="package_discount" name="package_discount"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_price</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="package_price" name="package_price"/>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-icon-default-company">package_pic</label>
            <div class="input-group input-group-merge">
              <span id="basic-icon-default-company2" class="input-group-text" >
                <i class="bx bx-buildings"></i></span>
                <input type="file"  id="basic-icon-default-company" class="form-control" placeholder="package_pic" name="package_pic"/>
            </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">duration</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-company2" class="input-group-text" >
                    <i class="bx bx-buildings"></i></span>
                    {{-- <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="duration" name="duration"/> --}}
                    <select name="form-select" name="duration">
                      <option value="3 days 4 night">3 days 4 night </option>
                      <option value="4 days 5 night">4 days 5 night</option>
                      <option value="5 days 6 night">5 days 6 night</option>
                      <option value="6 days 7 night">6 days 7 night</option>
                      <option value="7 days 8 night">7 days 8 night</option>
                      <option value="7 days 8 night">8 days 9 night</option>
                      <option value="7 days 8 night">9 days 10 night</option>
                      <option value="7 days 8 night">10 days 11 night</option>
                    </select>
                </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-icon-default-company"> route</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text" >
                        <i class="bx bx-buildings"></i></span>
                        <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="route" name="route"/>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">detail_desc</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-company2" class="input-group-text" >
                            <i class="bx bx-buildings"></i></span>
                            <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="detail_desc" name="detail_desc"/>
                        </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-icon-default-company">category</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text" >
                                <i class="bx bx-buildings"></i></span>
                                {{-- <input type="text"  id="basic-icon-default-company" class="form-control" placeholder="category" name="category"/> --}}
                                <select name="category" id="">
                                  @foreach ($categorys as $item)
                                      <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                                  @endforeach
                                </select>
                            </div>
                            </div>
                        
                

             
         
         
          <button type="submit" class="btn btn-primary">Submit</button>
        </form
@include('adminfooter')