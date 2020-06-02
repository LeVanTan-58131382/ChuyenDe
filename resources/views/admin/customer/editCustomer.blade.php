@extends('admin.home')

@section('content')
<div class="create-customer">
    <h3 style="text-align: center">Cập nhật hồ sơ khách hàng</h3>
    <form action="{{ route('update-cus', $user -> id)}}">
        <div class="form-group">
            <label for="">Tên khách hàng:</label>
            <input type="text" class="form-control" value="{{ $user -> name}}" name="name">
          </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" value="{{ $user -> email}}" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Mật khẩu:</label>
          <input type="password" class="form-control"  name="password">
        </div>
        <div class="form-group">
            <label for="pwd">Số điện thoại:</label>
            <input type="text" class="form-control" value="{{ $user -> phone}}" name="phone">
          </div>
        <div class="form-group address">
            <label for="pwd">Địa chỉ căn hộ:</label>
            <ul>
                <li><label for="pwd">Block:</label>
                    <select name="selectBlock">
                        <option selected value="{{ $apartment -> id}}">{{ $apartment -> block}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li><label for="pwd">Tầng:</label>
                    <select name="selectFloor">
                        <option selected value="{{ $apartment -> id}}">{{ $apartment -> floor}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </li>
                <li><label for="pwd">Nhà:</label>
                    <select name="selectApartment">
                        <option selected value="{{ $apartment -> id}}">{{ $apartment -> apartment}}</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option> {{--vì đây là số liệu cố định ít dc thay đổi và cũng không phải chức năng chính nên sẽ cố định như vậy --}}
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </li>
            </ul>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary">Lưu</button>
      </form>
</div>
<style>
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
        height: 30px;
        border-radius: 4px;
    }
    
</style>
@endsection