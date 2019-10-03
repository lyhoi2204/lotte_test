<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title m-b-md">
            <h1>Inventories</h1>
            <hr>
        </div>

        <div class="heading">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Ngày bắt đầu</label>
                        <input name="from_date" type="date" class="form-control" placeholder="Y/m/d"
                               value="{{Carbon\Carbon::parse($inputs['from_date'])->format('Y-m-d')}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Ngày kết thúc</label>
                        <input name="to_date" type="date" class="form-control" placeholder="Y/m/d"
                               value="{{Carbon\Carbon::parse($inputs['to_date'])->format('Y-m-d')}}">
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary">Lọc</button>
                    </div>

                </div>

            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Mã sản phẩm</th>
                    <th scope="col">Tồn đầu kỳ</th>
                    <th scope="col">Xuất</th>
                    <th scope="col">Nhập</th>
                    <th scope="col">Tồn cuối kỳ</th>
                </tr>
                </thead>
                <tbody>
                @foreach($inventories as $inventory)
                    @php
                        $totalAfterInventory = $inventory->total_inventory - ( $inventory->import + $inventory->export );
                    @endphp
                <tr>
                    <th>{{$inventory->product_id}}</th>
                    <td>{{$inventory->total_inventory}}</td>
                    <td>{{$inventory->export}}</td>
                    <td>{{$inventory->import}}</td>
                    <td>{{$totalAfterInventory}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
