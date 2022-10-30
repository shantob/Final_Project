<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category List Pdf Downlood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="text-center container p-5">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <label for="caregory" class="mb-4 h1 text-dark">List Category <span class="text-danger">({{$categories->count()}})</span></label>
                <table class="table table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">List Category</th>
                            <th colspan="3" scope="col">Action</th>

                    </thead>
                    <tbody>
                        @foreach ($categories as $categors)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$categors->name}}</td>
                            <td>{{$categors->is_active? 'true' : 'False'}}</td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h1>Category List</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>