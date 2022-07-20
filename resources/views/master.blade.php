<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <!--Jquery link -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

            {{-- bootstrap 3 --}}
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



         {{-- bootstrap 4 --}}
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        {{-- icon --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./../css/master-style.css">

    <title>Small Shop</title>
</head>
<style>

.custom-product
{
    background: linear-gradient(120deg, rgba(65, 63, 63, 0.932) 0%, rgba(121, 119, 119, 0.089) 100%);
    margin-top: 0;
}
nav
{
    margin: 0  !important;
    padding: 0;
}
.custome-login
{
    height: 500px;
    padding-top: 100px;
}
.carousel-caption
{
    background-color: rgba(0, 0, 0, 0.5);
    margin-top: 0px;
    padding-top: 0px;
}
img.slider-img
{
    height: 20rem !important;
    padding: 10px;
    padding-left: 25px;
}

.carousel-control-prev:hover
{
    background: linear-gradient(120deg, rgba(0, 0, 0, 0.932) 0%, rgba(121, 119, 119, 0.089) 100%);
}
.carousel-control-next:hover
{
    background: linear-gradient(120deg,rgba(121, 119, 119, 0.089) 100%,  rgb(0, 0, 0) 4%);
}
.trending-wrapper
{
    width: 97%;
    margin: 0 auto;
}

.trending-items
{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.trending-item
{
    height: 20%;
    padding: 10px;
    margin: 5px;
}

.trending-image
{
    height: 100px;
}

.trending-item h3
{
    padding: 5px;
}
.row
{
    margin: 5px;
}
.detail-img
{
    height: 200px;
    margin: 10px
}
.item-detail
{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.item-detail button
{
    width: 25%;
}
/* detail container */
div.detail-container
{
    padding: 5%;
}
.cart-list
{
    background: white !important;
    margin: 15px;
}
.cart-list-divider
{
  /* border-bottom: 1px solid black; */
    padding: 10px;
    margin: 8px;
    box-shadow: 0px 0px 10px rgba(116, 107, 107, 0.274)

}
</style>
<body>
    {{View::make('header')}}
    @yield('content')
    <br/>
    {{View::make('footer')}}
</body>
</html>
