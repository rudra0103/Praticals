@include('adminnav')
<div>

<a href="{{route('package.create')}}" class="btn btn-outline-danger">Add Package</a>
   <div  class="table-responsive"></div>

    <table class="table table-primary">
    
        <thead>
            <tr>
                <th scope="col">sr.no</th>
                <th scope="col">Name</th>
                <th scope="col">Pic</th>

                <th scope="col">Price</th>
                 <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        @foreach ($data as $item)
            <tr class="">
                <td scope="row">{{$loop->index +1}} </td>
                <td>{{$item->package_name}}</td>
                <td><img src="{{$item->package_pic}}" height="100" width="100" alt=""></td>
                <td>{{$item->category}}</td>
                <td>{{$item->package_price}}</td>

                <td>
                    <a href="{{route('package.show',$item->_id)}}" class="btn btn-dark">show</a>
                    <a href="{{route('package.edit',$item->_id)}}" class="btn btn-dark">Edit</a>

                    <form class="d-inline" action="{{route('package.destroy',$item->_id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
        @endforeach
        
    </table>
</div>

@include('adminfooter')