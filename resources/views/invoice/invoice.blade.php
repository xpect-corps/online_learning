<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('assets/invoice/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('assets/invoice/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/invoice/jquery-1.11.1.min.js') }}"></script>


    <style>
        .invoice-title h2,
        .invoice-title h3 {
            display: inline-block;
        }

        .table>tbody>tr>.no-line {
            border-top: none;
        }

        .table>thead>tr>.no-line {
            border-bottom: none;
        }

        .table>tbody>tr>.thick-line {
            border-top: 2px solid;
            border-bottom: 2px solid;
        }

        .panel-default {
            border: none;
        }

        .panel {
            box-shadow: none;
        }

        .first-letter {
            font-size: 15px;
            font-weight: 400;


        }

        .first-letter span {
            opacity: .5;
        }

        .logo {
            width: 84%;


        }

        .text-head {
            font-size: 30px;
            font-weight: 600;
        }

        .opacity-1 {
            opacity: 50%;
            font-size: 12px
        }

        .opacity-1-text {
            font-size: 10px
        }

        .border-bottom {
            border-bottom: 1px solid #000;
        }

        .box {
            border: 1px solid #000;
            height: 100px;
            width: 200px;

        }
    </style>



</head>

<body>


    <div class="container">

        <div class="row mt-3">
            <h5 class="first-letter">BILL OF SUPPLY <span class="opacity-50">ORIGINAL FOR RECIEPT</span></h5>
        </div>
        <div class="row " style="display:flex; align-items:center">
            <div class="col-md-2">
                <div style="display: flex; justify-content-center; align-items-center">
                    <img src="{{ asset('assets/images/logo_old.png') }} " class="logo" alt="">

                </div>
            </div>
            <div class="col-md-10">
                <h3 class="text-head">Neogen Home Care Health Technologies</h3>
                <p class="" style="margin: 0;">Rajasree,Poojapura,Thiruvananthapuram,Kerala. (Company Reg
                    no:U85100KL2021PTC072126)</p>
                <p>Mobile:9778411920</p>
            </div>
        </div>
        <hr style="border:6px solid #00000091">
        <div class="col-xs-12" style="margin-bottom:10px">
            <div class="invoice-title">

                {{-- <img src="{{assets('assets/images/logo_old.png')}}" alt=""> --}}
                {{-- <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3> --}}
            </div>
            <div class="row" style="margin-bottom: 5px">
                <div class="col-xs-6 text-start">
                    <strong>Invoice No: <span style="font-weight:100; ">NH/SL/22-23/3404</span></strong>

                </div>
                <div class="col-xs-6 text-start">
                    <strong>Invoice Date: <span style="font-weight:100; ">17/11/2022</span> </strong>


                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 text-start">
                    <span style="font-weight:100;margin-botton:2px">BILL TO</span>

                </div>
                <div class="col-xs-6 text-start">
                    <strong>Clinician Name <span style="font-weight:100; ">Aswathy RN</span> </strong>


                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 text-start">
                    <strong>Sephany Nolasco (20221937) </strong>


                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 text-start">
                    <span style="font-weight:100; ">Mobile: 9048749194</span>


                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>ITEMS</strong></td>
                                        <td class="text-center"><strong>QTY</strong></td>
                                        <td class="text-center"><strong>RATE</strong></td>
                                        <td class="text-right"><strong>TAX</strong></td>
                                        <td class="text-right"><strong>AMOUNT</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                    <tr>
                                        <td>GLTCATED HAEMOGLOBIN (HBA1c)
                                            <div class="opacity-1-text">Blood Draw</div>
                                        </td>
                                        <td class="text-center">1 UNIT</td>
                                        <td class="text-center">475</td>
                                        <td class="text-right">0
                                            <div class="opacity-1"> (0%)</div>
                                        </td>
                                        <td class="text-right">475
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>GLTCATED HAEMOGLOBIN (HBA1c)
                                            <div class="opacity-1-text">Blood Draw</div>
                                        </td>
                                        <td class="text-center">1 UNIT</td>
                                        <td class="text-center">475</td>
                                        <td class="text-right">0
                                            <div class="opacity-1"> (0%)</div>
                                        </td>
                                        <td class="text-right">475
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        </td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-right">
                                        </td>
                                        <td class="text-right">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="thick-line "><strong>Subtotal</strong></td>
                                        <td class="thick-line text-center">2</td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-right">₹0</td>
                                        <td class="thick-line text-right">₹575</td>
                                    </tr>


                                </tbody>


                            </table>


                        </div>
                        <div class="row" style="margin-bottom: 5px">
                            <div class="col-xs-8">

                                <div><strong> BANK DEATILS</strong></div>
                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 20%">Name: </div>
                                    <div>Neogen Home Care Health Technologies</div>
                                </div>
                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 20%">IFSC Code: </div>
                                    <div>ICIC0006262</div>
                                </div>
                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 20%">Account No </div>
                                    <div>626205213147</div>
                                </div>
                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 20%">Bank: </div>
                                    <div>ICICI Bank, THIRUVANANTHAPURAM
                                        <br>(TRIVANDRUM)
                                    </div>
                                </div>


                            </div>
                            <div class="col-xs-4 ">

                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 70%; display:flex; justify-content:end;">TAXABLE ACCOUNT</div>
                                    <div style="width: 30%;  display:flex; justify-content:end; padding:0 5px">₹575
                                    </div>
                                </div>
                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 70%; display:flex; justify-content:end;">Discount </div>
                                    <div style="width: 30%; display:flex; justify-content:end;  padding:0 5px"
                                        style="width: 20%">-₹325</div>
                                </div>
                                <div class="border-bottom"></div>
                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 70%; display:flex; justify-content:end;"> <strong>TOTAL
                                            AMOUNT</strong> </div>
                                    <div style="width: 30%; display:flex; justify-content:end;  padding:0 5px"
                                        style="width: 20%">₹250</div>
                                </div>

                                <div class="border-bottom"></div>

                                <div style="display: flex; margin:4px 0">
                                    <div style="width: 70%; display:flex; justify-content:end;">Recieved Amount </div>
                                    <div style="width: 30%; display:flex; justify-content:end;  padding:0 5px"
                                        style="width: 20%">₹0</div>
                                </div>

                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 5px">
                            <div class="col-xs-8">
                                <div style="display: flex; margin:10px 0">
                                    <div class="col-xs-4" style="padding: 0">
                                        <div><strong> PAYMENT QR CODE</strong></div>
                                        <div style="display: flex; margin:4px 0">
                                            <div style="">UPI ID: </div>

                                        </div>
                                        <div style="display: flex; margin:4px 0">
                                            <div style="">neogenindia@icici</div>

                                        </div>
                                        <div>
                                            <img src="{{ asset('assets/images/phonepe.png') }}" style="width: 20%; "
                                                alt="">
                                            <img src="{{ asset('assets/images/gpay.png') }}" style="width: 20%; "
                                                alt="">

                                            <img src="{{ asset('assets/images/paytm.png') }}" style="width: 20%; "
                                                alt="">

                                            <img src="{{ asset('assets/images/upi.png') }}" style="width: 20%; "
                                                alt="">

                                        </div>

                                    </div>
                                    <div class="col-xs-4">
                                        <img src="{{ asset('assets/images/download.png') }}" style="width: 36%"
                                            alt="">
                                    </div>
                                </div>

                                <div>
                                    <strong>TERMS AND CONDITIONS</strong>
                                </div>
                                <div>
                                    1.Goods once sold will not be taken back or exchanged </div>
                                <div>
                                    2.All disputes are subject to Kerala jurisdiction </div>




                            </div>
                            <div class="col-xs-4 ">

                                <div style="display: flex;justify-content:end; margin:4px 4px;">
                                    <div style=" display:flex; "> <strong>Total Amount (in words)</strong> </div>

                                </div>
                                <div style="display: flex; justify-content:end; margin:4px 4px;">
                                    <div style=" display:flex;">Two Hundred Fifty Rupees </div>

                                </div>
                                <div style="display: flex;justify-content:end; margin-top:5px">
                                    <div class="box"> </div>
                                </div>
                                <div style="display: flex;justify-content:end; margin-top:5px">
                                    <strong>AUTHORISED SIGNATORY FOR</strong>
                                  
                                </div>
                                <div style="display: flex;justify-content:end; margin-top:3px">
                                    Neogen Home Care Health Technologies
                                  
                                </div>



                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>




    </div>


    </div>



</body>

</html>
