@extends('layouts.admin')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Tài khoản #{{ $data->id }} </h3>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('account.update', ['id' => $data->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Sửa trạng thái:</label>
                            <select class="js-example-basic-single" name="account_status" style="width:100%">
                                @if($data->status == "active")
                                    <option value="" disable>Chọn trạng thái</option>
                                    <option value="active" selected>Active</option>
                                    <option value="deactive">Deactive</option>
                                @else
                                    <option value="" disable>Chọn trạng thái</option>
                                    <option value="active">Active</option>
                                    <option value="deactive" selected>Deactive</option>
                                @endif
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning mr-2">Sửa</button>
                    </form>
                    <a class="btn btn-primary mt-3" href="{{ route('account.index') }}">Quay lại</a>
                </div>
            </div>
        </div>
    </div>
@stop
