@extends('master')
@section('content')
<style>
    .errmessage
    {
        color: red;
        font-weight: bold;
    }
</style>
<div class="container">
    <div class="row">
         <div class="col-sm-4 col-sm-offset-4 custome-login">
            @if(Session::get('success'))
                <div class="alert alert-success">
                     {{Session::get('success')}}
                     {{Session::forget('success')}}
                </div>
            @elseif (Session::get('fail'))
                <div class="alert alert-danger">
                    {{Session::get('fail')}}
                    {{Session::forget('fail')}}
               </div>
            @endif
           <form action="/login" method="POST">
             @csrf
               <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               </div>
                    <p class="errmessage">{{Session('errEmail')}}</p>
                    {{session()->forget('errEmail')}}
               <div class="form-group">
                 <label for="exampleInputPassword1">Password</label>
                 <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
               </div>
                   <p class="errmessage">{{Session('errPassword')}}</p>
                   {{session()->forget('errPassword')}}
               <a href="/register">
                 <small id="emailHelp" class="form-text text-muted">Sign up - Click here if you don't have an account</small>
               </a>
               <button type="submit" class="btn btn-primary">Login</button>
             </form>

         </div>
    </div>
</div>
@endsection
