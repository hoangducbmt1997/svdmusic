@extends('layouts.admin')
@section('title','Edit User')
@section('main')

    <form action="{{route('admin.user.update',$user->id)}}" role="form" enctype="multipart/form-data" method="POST">
      <div class="col-md-6">
        @csrf @method('PUT')
        <input type="hidden" name="id" value="{{$user->id}}"/>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" value="{{$user->name}}" name="name"  class="form-control" placeholder="" >
          @error('name')
          <small id="helpId" class="text-muted">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" value="{{$user->email}}" name="email"  class="form-control" placeholder="" >
          @error('name')
          <small id="helpId" class="text-muted">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="">New Password</label>
          <input type="password" name="password" id="" class="form-control" placeholder=""
              aria-describedby="helpId">
          @error('password')
              <small id="helpId" class="text-muted">{{ $message }}</small>
          @enderror
      </div>
      <div class="form-group">
        <label for="">Repeat Password</label>
        <input type="password" name="confirm_password" id="" class="form-control" placeholder=""
            aria-describedby="helpId">
        @error('confirm_password')
            <small id="helpId" class="text-muted">{{ $message }}</small>
        @enderror
    </div>
        <div class="form-group">
          <label for="">Image User</label>
          <div>
            <input type="file" name="upload_image" >
            <img onerror="this.src='{{'public/uploads/user/avatar_default.jpg')}}'" src="{{'public/uploads/user')}}/{{$user->image_user}}" width="50" />
          </div>

        </div>

        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
    </form>

@endsection
