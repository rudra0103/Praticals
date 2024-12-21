@include('adminnav')
<section>
        <div class="container my-5">
         <div class="row">
          <div class="col-4" >  
            <div class="card" >
                <div class="card-body" style="background-color: black">
                   <div class="card-title fs-1 text-light" >Revenue</div>
                   <i class="bi bi-person display-1 text-light "></i>
                   <h3 class="display-5 text-light">50</h3>
                 </div>
            </div>  
          </div>
            <div class="col-4" >  
                    <div class="card" >
                        <div class="card-body" style="background-color: black">
                        <div class="card-title fs-1 text-light">Destination</div>
                        <i class="bi bi-grid display-1 text-light "></i>
                        <h3 class="display-5 text-light">2549</h3>
                        </div>
                    </div>  
                </div>   
                
                <div class="col-4">  
                    <div class="card">
                        <div class="card-body" style="background-color: black">
                        <div class="card-title fs-1 text-light">Package</div>
                        <i class="bi bi-box-seam display-1 text-light "></i>
                        <h3 class="display-5 text-light">1034</h3>
                        </div>
                    </div>  
                </div>

                <div class="col-4">  
                    <div class="card my-3">
                        <div class="card-body" style="background-color: black">
                        <div class="card-title fs-1 text-light">Bookings</div>
                        <i class="bi bi-cart3 display-1 text-light "></i>
                        <h3 class="display-5 text-light">740</h3>
                        </div>
                    </div>  
                </div>

                <div class="col-4">  
                    <div class="card my-3">
                        <div class="card-body" style="background-color: black">
                        <div class="card-title fs-1 text-light">Order</div>
                        <i class="bi bi-cart3 display-1 text-light "></i>
                        <h3 class="display-5 text-light">740</h3>
                        </div>
                    </div>  
                </div>
        </div>
        <hr>
<h1>Recent Orders</h1>
<hr>

<table class="table table-striped col-6" >
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Username</th>
            <th>Pic</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total amount</th>





        </tr>
    </thead>
    <tbody>
<tr>
    <td>#ORD12</td>
    <td>Shweta</td>
    <td><img src="/img/no_image.png" height="50" width="50" alt=""></td>
    <td>Sofa</td>
    <td>5000</td>
    <td>1</td>
    <td>5000</td>



</tr>
    </tbody>
</table>

</section>    
 @include('adminfooter')