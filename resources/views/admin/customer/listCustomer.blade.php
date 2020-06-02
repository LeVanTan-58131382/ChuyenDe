@extends('admin.home')

@section('content')
<div class="list-user">
    <a class="btn btn-dark" href="{{ route('create-cus')}}">Tạo mới khách hàng</a>
    <h3 style="text-align: center">Danh sách khách hàng</h3>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Mã KH</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @if (count($listUsers) > 0)
                        @foreach ($listUsers as $user)
                            <tr>
                                <th scope="row">{{ $user -> id}}</th>
                                <td>{{ $user -> name}}</td>
                                <td>{{ $user -> email}}</td>
                                <td>
                                    <?php foreach($apartments as $apart)
                                        if(($apart -> user_id) == ($user -> id))
                                        {
                                           echo 'Căn hộ '.$apart->block.$apart->floor.$apart->apartment;
                                        }
                                    ?>
                                </td>
                                <td>{{ $user -> phone}}</td>
                                <td><a href="{{ route('show-cus', $user -> id)}}">Chi tiết</a></td>
                                <td><a href="{{ route('edit-cus', $user -> id)}}">Cập nhật</a></td>
                                <td>
                                      <i style='cursor:pointer' class="fas fa-trash-alt" data-toggle="modal"
                                    data-target="#exampleModal{{$user -> id}}" ></i>
                                      <!-- Modal -->
                                      <div class="modal fade" id="exampleModal{{$user -> id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn có muốn xóa {{$user -> name}}
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                              <a href="{{route('destroy-cus', $user -> id)}}"><button type="button" class="btn btn-primary">Xóa</button></a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <h3>Không có khách hàng nào trong danh sách.</h3>
                    @endif
                </tbody>
              </table>
        </div>
        {{ $listUsers->links() }}
    </div>
</div>
<style>
    .list-user{
        position: relative;
        left: 0%;
        top: 0%;
        width: 100%;
        height: 100%;
        border: 1px solid black;
        border-radius: 5px;
        padding: 30px;
    }
    
</style>
@endsection