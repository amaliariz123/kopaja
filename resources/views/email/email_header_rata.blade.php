<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div style="width:600px;height:700px;border:1px solid black;">
            
        {{-- Image & title --}}
        <div style="margin-bottom: 15px;padding: 10px;clear:both;">
            <div style="float:left">
                <p style="font-size:30px;font-weight:bold">Invoice</p>
            </div>
            <div style="float:right">
                <img src="{{url('images/logo/rata_logo_square.png')}}" alt="logo_rata" style="width:80px;">
            </div>
        </div>
 
        {{-- From --}}
        <div style="width: 400px;margin-left:30px;">
            <div style="margin-bottom: 15px;clear:both;">
                {{-- From/to --}}
                <div style="float:left; width:40px ">
                    <div style="margin-bottom:60px">
                        <p>From</p>
                    </div>
                    <div>
                        <p>To</p>
                    </div>
                </div>
                {{-- Address --}}
                <div style="float:right;width:320px;border-left:2px solid #8c8787;padding-left:2px">
                    <div style="margin-bottom:10px">
                        <p style="margin:0">PT. Rata Aestetik Teknologi Aktual</p>
                        <p style="margin:0">Jl. Wahid Hasyim No. 47, Menteng</p>
                        <p style="margin:0">Jakarta Pusat,Indonesia</p>
                        <p style="margin:0">Phone Number</p>
                    </div>
                    <div>
                        <p style="margin:0">Customer Name</p>
                        <p style="margin:0">Customer Address 1</p>
                        <p style="margin:0">Customer Address 2</p>
                        <p style="margin:0">Customer Phone</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- /form --}}

        {{-- date --}}
        <div style="width: 300px;margin-left:30px;">
            <div style="margin-bottom: 15px;clear:both;">
                <br><br>
                {{-- From/to --}}
                <div style="float:left">
                    <div style="margin-bottom:30px">
                        <p style="width:100%;margin-left:1px">Invoice ID</p>
                    </div>
                    <div>
                        <p>Issue Date</p>
                    </div>
                </div>
                {{-- Address --}}
                <div style="float:right;width:220px;border-left:2px solid #8c8787;padding-left:2px">
                    <div style="margin-bottom:30px">
                        <p>
                            ------
                        </p>
                    </div>
                    <div>
                        <p>
                            DD/MM/YYYY
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- date --}}
        <br>
        <div style="width:100%px; margin-top:100px">
            <table style="width:95%;margin:10px;border-collapse: collapse;">
                <col width="50">
                <col width="100">
                <col width="50">
                <col width="50">
                <col width="50">
                <tr style="border-top: solid thin #c01720;border-bottom: solid thin #c01720;">
                    <th>No.</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr height="50" style="text-align:center">
                    <td>1</td>
                    <td>Box 1 Order</td>
                    <td>350,000</td>
                    <td>1</td>
                    <td>Total</td>
                </tr>

                <tr height="50" style="text-align:right">
                    <td colspan="2"></td>
                    <th colspan="2" style="text-align:right">Subtotal</th>
                    <td>350,000</td>
                </tr>
                <tr height="50" style="text-align:right">
                    <td colspan="2"></td>
                    <th colspan="2" style="text-align:right">VAT 10%</th>
                    <td>35,000</td>
                </tr>
                <tr height="50"  style="text-align:right">
                    <td colspan="2"></td>
                    <th colspan="2" style="text-align:right">GRAND TOTAL</th>
                    <td>385,000</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>