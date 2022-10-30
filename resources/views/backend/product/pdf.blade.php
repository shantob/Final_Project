<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product List Pdf Downlood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class=" container p-5">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
              <label for="product" class=" h1 text-dark">Product LIst
                <br><span class="text-danger mb-4">Total :
                    ({{ $products->count() }})</span></label>
            <input type="text" id="product_search" class="form-control" placeholder="Search Product" onclick="searchFun()">
            <table class="table table-responsive table-hover table-responsive round" id="product_table">
                <thead>
                    <tr class="text-light">
                        <th scope="col">#</th>
                        <th scope="col">Name Of All Product</th>
                        <th scope="col">Category </th>
                        <th scope="col">Price</th>

                       
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category?->name }}</td>
                        <td>{{ $product->price }}</td>

                   
                    </tr>
                    @endforeach

                </tbody>

            </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>