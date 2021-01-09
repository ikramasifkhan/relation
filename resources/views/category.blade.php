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
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Industry name</label>
                    <select class="form-control" name="industry_id">
                        <option>Select industry</option>
                        @foreach($industries as $ind)
                            <option value="{{$ind->id}}">{{$ind->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Category name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>

        <div class="col-12 p-5">
            <table class="table table-responsive table-bordered">
                <tr>
                    <td>Sl no</td>
                    <td>Industry name</td>
                    <td>Name</td>
                </tr>
                @foreach($categories as $key=>$cat)
                    <tr>
                        <td>{{$key = $key+1}}</td>
                        <td>{{$cat->industry->name}}</td>
                        <td><a href="{{route('category.details', ['id'=>$cat->id])}}">{{$cat->name}}</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div ><a class="col-6 btn btn-block btn-info" href="{{route('company')}}">Company</a></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

