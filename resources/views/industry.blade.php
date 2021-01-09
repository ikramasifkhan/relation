<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 >Industry (Master category)</h3>
        </div>
        <div class="col-12 p-5">
            <form action="{{route('industry.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Industry name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>

        <div class="col-12 p-5">
            <table class="table table-responsive table-bordered">
                <tr>
                    <td>Sl no</td>
                    <td>Name</td>
                </tr>
                @foreach($industries as $key=>$industry)
                <tr>
                    <td>{{$key = $key+1}}</td>
                    <td>{{$industry->name}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div ><a class="col-6 btn btn-block btn-info" href="{{route('category')}}">Category</a></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>
