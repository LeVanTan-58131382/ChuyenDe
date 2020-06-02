@extends('admin.home')

@section('content')
<div class="create-customer">
    <h3 style="text-align: center">Tạo mới khách hàng</h3>
    <form method="post" action="{{ route('store-cus')}}">
        @csrf
        <div class="form-group">
            <label for="">Tên khách hàng:</label>
            <input type="text" class="form-control" placeholder="Nhập tên khách hàng" name="name" value="{{ old('name') }}">
          </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" placeholder="Nhập email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
          <label for="pwd">Mật khẩu:</label>
          <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">
        </div>
        <div class="form-group">
            <label for="email">SĐT:</label>
            <input type="text" class="form-control" placeholder="Nhập SĐT" name="phone" value="{{ old('phone') }}">
          </div>
        <div class="form-group address">
            <label for="pwd">Địa chỉ căn hộ:</label>
            <ul>
                <li><label for="pwd">Block:</label>
                    <select name="selectBlock" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li><label for="pwd">Tầng:</label>
                    <select name="selectFloor" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li><label for="pwd">Nhà:</label>
                    <select name="selectApartment" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </li>
            </ul>
        </div>
        <div class="form-group vehicle">
            <br><br>
            <label for="pwd">Phương tiện:</label>
            <br>
            <ul>
                <li>
                    <b>Xe ô tô : </b>
                    <input min="0" style="border-radius: 4px; margin-left: 30px" type="number" name="car" placeholder="Số lượng">
                </li>
                <li>
                    <b>Xe mô tô : </b>
                    <input min="0" style="border-radius: 4px; margin-left: 15px" type="number" name="moto" placeholder="Số lượng">
                </li>
                <li>
                    <b>Xe đạp : </b>
                    <input min="0" style="border-radius: 4px; margin-left: 31px" type="number" name="bike" placeholder="Số lượng">
                </li>
            </ul>
          </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Tạo mới</button>
      </form>
</div>
<style>
    .vehicle li{
        list-style: none;
        margin: 20px;
    }
    .create-customer{
        position: relative;
        left: 0%;
        top: 0%;
        width: 100%;
        height: 1000px;
        border: 1px solid black;
        border-radius: 5px;
        padding: 30px;
    }

    .address li{
        list-style: none;
        float: left;
        margin-right: 30px;
    }
    .address select{
        width: 70px;
        height: 35px;
        border-radius: 4px;
    }
    
</style>
@endsection