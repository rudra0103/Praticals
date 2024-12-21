@include('adminnav')


<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.min.css" rel="stylesheet">



<div class="container">
    <a href="{{ route('category.create') }}" class="btn btn-dark my-2"><i class="bi bi-plus-square"></i> Add category</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">sr.no</th>
                <th scope="col">category name</th>
                <th scope="col">category pic</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $item)
                <tr class="table-primary">
                    <th scope="row">{{$loop->index +1}}</th>
                    <td>{{ $item->category_name }}</td>
                    <td> <img src="{{ $item->category_pic }}" alt="" height="100" width="100"></td>

                    <td>
                        <a href="{{route('category.edit',$item->_id)}}" class="btn btn-outline-warning">Edit<i class="bi bi-pencil-fill"></i></a>

                        <form class="d-inline" onsubmit="onDelete(event)" action="{{route('category.destroy',$item->_id)}}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger">Delete<i class="bi bi-trash3-fill"></i></button>
                        </form>
                    </td>
            @endforeach
    </table>
    {{$data->links()}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
    <script>
        function onDelete(event){
            event.preventDefault();
            Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    event.target.submit();
  }
});
        }
     </script>   
    @if (Session::get('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{Session::get('success')}}",
                showConfirmButton: false,
                timer: 4500
            });
        </script>
    @endif
</div>
@include('adminfooter')
