@extends('master')
@section('content')
<style>
    .invoice
    {
        margin: 30px;
    }
</style>
        <div class="invoice">
            <table class="table">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>{{$total}}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                  </tr>
                </tbody>
           </table>
            <form action="#">
                    <div class="form-group">
                         <textarea type="email" class="form-control" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method</label><br>
                        <input type="radio" name="payment" ><span>online payment</span><br>
                        <input type="radio" name="payment" ><span>EMI payment</span><br>
                        <input type="radio" name="payment" ><span>Payment on Delivery</span><br>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button><br>
              </form>
        </div>

@endsection
