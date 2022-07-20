@extends('master')
@section('content')
 <div class="container">
     <div class="row">
          <div class="col-sm-4 col-sm-offset-4 custome-login">
            <form action="/signup" method="POST">
              @csrf
                <div class="form-group">
                    <label for="exampleInput">Full Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputName"  placeholder="Enter Full Name" value="{{ old('name')}}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>


                <button type="submit" class="btn btn-primary">Sign up</button>
              </form>

          </div>
     </div>
 </div>
@endsection
