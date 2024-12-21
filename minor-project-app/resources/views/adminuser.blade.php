@include('adminnav')
<div class="container">

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Sr No</th>
                <th scope="col">Fullname</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr class="">
                <td scope="row">{{$loop->index +1}}</td>
                <td>{{$item->fullname}}</td>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->mobileno}}</td>
                <td>{{$item->address}}</td>
            </tr>
           
            @endforeach
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>


</div>
@include('adminfooter')