<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type='text/css'>
    .title {
        color:white;
        padding-top: 25px;
        font-size: 25px; 
    }

    label {

        display: inline-block;
        width: 200px;
    }

    </style>

    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-oKRxFNf1dHojcVxZUzA7BbA7VRb75bGb1/ftXGd7C3X4KndHjqXmc5pQw2RY63bG" crossorigin="anonymous"></script>
<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-lcodNvtlH0CT3D0L8+REPA1Nrfuj1pZ6LsC3Xl8zRojq46j9EN7tdx4mG2mYOKcZ" crossorigin="anonymous"></script>

  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
   @include('admin.navbar')

   <div class="container-fluid page-body-wrapper">

    <div class="container" align='center'> 

    <h3 class="title"> Add product</h3>

    @if(session()->has('message'))


    <div class="alert alert-success">

    <button type="button" class="close" data-dismiss='alert'>x</button>

    {{session()->get('message')}}

    </div>

    @endif

    <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div style="padding: 15px;">
        <label   for="">Product title </label>

        <input style='color:black' type="text" name="title" placeholder="Give a product title" required=''>
    </div>

    <div style="padding: 15px;">
        <label>Price</label>

        <input style='color:black' type="number" name="price" placeholder="Give a price" required=''>
    </div>

    <div style="padding: 15px;">
        <label for="">Product Description</label>

        <input style='color:black' type="text" name="description" placeholder="Give a description" required=''>
    </div>

    <div style="padding: 15px;">
        <label for="">Quantity</label>

        <input style='color:black' type="text" name="title" placeholder="Product Quantity" required=''>
    </div>

    <div style="padding: 15px;">
        <input type="file" name='file'>
    </div>

    <div style="productTitle">
        <input class="btn btn-success" type="submit" name=''>
    </div>
</form>

<div>

</div>
    </div>
   </div>
      @include('admin.script')
  </body>
</html>