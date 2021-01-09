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
            <h3 >Category name: {{$category->name}}</h3>
        </div>

        <div class="col-12">
            <h3 >Companies name:</h3>
        </div>

        @php
        $companies = \App\Models\Company::where('category_id', $category->id)->get();
        @endphp

{{--        <div class="col-12 p-5">--}}
{{--            <form action="{{route('company.store')}}" method="POST">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label>Category name</label>--}}
{{--                    <select class="form-control" name="category_id">--}}
{{--                        <option>Select category</option>--}}
{{--                        @foreach($categories as $cat)--}}
{{--                            <option value="{{$cat->id}}">{{$cat->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label>Company name</label>--}}
{{--                    <input type="text" name="name" class="form-control">--}}
{{--                </div>--}}
{{--                <button class="btn btn-success" type="submit">Submit</button>--}}
{{--            </form>--}}
{{--        </div>--}}

        <div class="col-12 p-5">
            <table class="table table-responsive table-bordered">
                <tr>
                    <td>Sl no</td>
                    <td>Company name</td>
                </tr>
                @foreach($companies as $key=>$com)
                    <tr>
                        <td>{{$key = $key+1}}</td>
                        <td>{{$com->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-12">
            <h3 >Products name:</h3>
        </div>

        @php
            $products = \App\Models\Product::where('category_id', $category->id)->get();
        @endphp
        <div class="col-12 p-5">
            <table class="table table-responsive table-bordered">
                <tr>
                    <td>Sl no</td>
                    <td>Products name</td>
                </tr>
                @foreach($products as $key=>$pro)
                    <tr>
                        <td>{{$key = $key+1}}</td>
                        <td>{{$pro->name}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div ><a class="col-6 btn btn-block btn-info" href="{{route('product')}}">Product</a></div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

