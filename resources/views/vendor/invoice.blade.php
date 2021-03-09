<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISHOP</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
            background-color: #b3251a;
            padding: 19px 40px;
            margin-top: 10px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">ISHOP</h1>
                </div>
                <div class="col-6" style="float:right;">
                    <div class="company-details">
                        <p class="text-white"></p>
                        <p class="text-white"></p>
                        <p class="text-white"></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="body-section">
            
                <div class="">
                    <h2 class="heading"><b>Invoice No.: </b>{{$orders->orderid}}</h2>
                    <p class="sub-heading"><b>Tracking No.</b> {{$orders->tracking_no}}</p>
                    <p class="sub-heading"><b>Order Date:</b> {{$orders->created_at->format('d-m-yy')}}  </p>
                    <p class="sub-heading"><b>Email Address: </b>{{$orders->email}} </p>
                </div>
                <div class="">
                    <p class="sub-heading"><b>Full Name:</b> {{$orders->fullname}}  </p>
                    <p class="sub-heading"><b>Address:</b> {{$orders->address_line_1}} </p>
                    <p class="sub-heading"><b>Phone Number:</b> {{$orders->phone_no}}  </p>
                    <p class="sub-heading"><b>City, State, Pincode:</b> {{$orders->city}}, {{$orders->state}}, {{$orders->pincode}}  </p>
                </div>
           
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                        <th class="w-20">Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$orders->name}}</td>
                        <td>{{$orders->price}}</td>
                        <td>{{$orders->quantity}}</td>
                        <td>{{$orders->email}}</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="float:right">Sub Total</td>
                        <td> {{$orders->price}} Rs/-</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="float:right">Tax Total %1X</td>
                        <td>GST</td>
                    </tr>
                    <tr>
                        <td colspan="3" style="float:right">Grand Total</td>
                        <td>{{$orders->email}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <h3 class="heading">Payment Status: {{$orders->payment_status}}</h3>
            <h3 class="heading">Payment Mode: {{$orders->payment_mode}} </h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2021 - IShop. All rights reserved. 
                <a href="#" class="float-right">IShop</a>
            </p>
        </div>      
    </div>      

</body>
</html>