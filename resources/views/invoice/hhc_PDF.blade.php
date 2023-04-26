
<!DOCTYPE html
    PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='https://www.w3.org/1999/xhtml'>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <style>
        body {
            font-family: " Inter", sans-serif;
            font-size: 12px;
        }
        table{
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            border-bottom: 0px;
        }
        th td tr {
            padding: 3px;
        }
    </style>
</head>

<body style=' ;font-size:12px;color: #333333;background-color:#FFFFFF; position:relative;'>

    <table align='center' border='0' cellpadding='0' cellspacing='0'
        style='height:842px;font-size:12px;border:1px solid rgb(255, 255, 255);'>
        <tr>
            <td valign='top'>
                <table width='100%' cellspacing='0' cellpadding='0'>

                    <h5 class="first-letter">BILL OF SUPPLY <span style="opacity:50%">ORIGINAL FOR RECIEPT</span></h5>
                </table>
                <table width='100%' cellspacing='0' cellpadding='0' style="margin-bottom:30px;">
                    <tr style="margin-bottom:10px;  ">
                        <td valign='top' width='25%' style='font-size:12px;'>
                            <img src="{{ asset('assets/images/logo_old.png') }}" width="75%" class="logo"
                                alt="" style="padding: 10px; margin-top:20px">
                        </td>
                        <td valign='top' style='font-size:20px;'> <strong>Neogen Home Care Health
                                Technologies</strong><br />
                                <span style="font-size: 13px;">Rajasree,Poojapura,Thiruvananthapuram,Kerala. (Company Reg
                                    no:U85100KL2021PTC072126)<br />
                                    Mobile:9778411920 <br /></span>
                            

                        </td>

                    </tr>
                </table>
                <table width='100%' height='' cellspacing='0' cellpadding='0'style="margin-bottom:5px;">
                    <tr style="background: rgb(240, 240, 240); ">
                        <td valign='top' width='50%' style='font-size:12px;  padding: 10px 0 10px;'> <strong>Invoice No:
                                <span
                                    style="font-weight:100; ">NH/SL/22-23/{{ $hcbooking_details->id }}</span></strong>

                        </td>
                        <td valign='top' width='50%' style="padding: 10px 0 10px;">
                            <strong>Invoice Date: <span
                                    style="font-weight:100; ">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</span>
                            </strong>
                        </td>
                    </tr>
                </table>

                <table width='100%' height='' cellspacing='0' cellpadding='0' style="margin-bottom:15px">
                    <tr>
                        <td><strong>BILL TO</strong></td>
                    </tr>
                    <tr>
                        <td> {{ $hcbooking_details->customer->user->first_name }}
                            {{ $hcbooking_details->customer->user->middle_name }}
                            {{ $hcbooking_details->customer->user->last_name }}
                            (MRN:{{ $hcbooking_details->customer->mr_number }})</td>
                    </tr>
                    <tr>
                        <td> Mobile: {{ $hcbooking_details->customer->user->mobile_number }}</td>
                    </tr>
                    <tr>
                        <td>Clinician: {{ $hctask_details[0]->first_name }} {{ $hctask_details[0]->middle_name }}
                            {{ $hctask_details[0]->last_name }}
                            (Mob:{{ $hctask_details[0]->mobile_number }})</td>
                    </tr>
                </table>


                <table width='100%' cellspacing='0' cellpadding='2' border='' bordercolor='#fff'
                    style="margin-bottom:20px">
                    <tr >

                        <td width='70%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px; padding:10px 0 10px;'>
                            <strong>Services</strong>
                        </td>
                        <td bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px; text-align: center; padding:10px 0 10px;'>
                            <strong>Amount</strong>
                        </td>

                    </tr>
                    <!-- foreach ($order->lineItems as $line) or some such thing here -->
                    @foreach ($hctask_details as $val)
                        <tr style="display:none; ">
                            <td colspan="*">
                        <tr style="border-bottom: 1px solid #0003;">

                            <td valign='top' style='font-size:12px; padding:10px 0 10px; '> {{ $val->service }}<div
                                    class="opacity-1-text">({{ $val->task_type }})</div>
                            </td>
                            <td valign='top' style='font-size:12px; padding:10px 0 10px; text-align: center;'>
                                {{ number_format($val->amount_without_tax) }}</td>

                        </tr>
                    @endforeach
                    <tr style="border-bottom: 1px solid #0003;  ">
                        <td style="padding:10px 0 10px;"><strong>Total Service Amount</strong></td>
                        <td valign='top' style='font-size:12px; text-align: center; padding:10px 0 10px;'>{{ $hcfinal_service_amount }}
                        </td>
                    </tr>
            </td>
        </tr>
    </table>


    <!-- consumables -->
    @if ($hc_consumables_data != null)
        <table width='100%' cellspacing='0' cellpadding='2' border='' bordercolor='#fff'
            style=" margin-bottom: 10px;">
            <tr>

                <td width=55%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px; padding:10px 0 10px;'><strong>Consumables</strong>
                </td>
                <td width=15%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px; text-align: center; padding:10px 0 10px;'>
                    <strong>Qty</strong>
                </td>
                <td width=15%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px; text-align: center; padding:10px 0 10px;'>
                    <strong>Rate</strong>
                </td>
                <td width=15%' bordercolor='#ccc' bgcolor='#f2f2f2' style='font-size:12px; text-align: center; padding:10px 0 10px;'>
                    <strong>Amount</strong>
                </td>

            </tr>
            <!-- foreach ($order->lineItems as $line) or some such thing here -->
            @foreach ($hc_consumables_data as $val)
                <tr style="display:none; ">
                    <td colspan="*">
                <tr style="border-bottom: 1px solid #0003;">

                    <td valign='top' style='font-size:12px; padding:10px 0 10px; '>{{ $val->consumable }}</td>
                    <td valign='top' style='font-size:12px; padding:10px 0 10px; text-align: center;'>{{ $val->quantity }} </td>
                    <td valign='top' style='font-size:12px; padding:10px 0 10px; text-align: center;'>{{ $val->amount }} </td>
                    <td valign='top' style='font-size:12px; padding:10px 0 10px; text-align: center;'>
                        ₹{{ round($val->amount * $val->quantity) }} </td>

                </tr>
            @endforeach
            <tr style="border-bottom: 1px solid #0003;">
                <td style="padding:10px 0 10px;"> <strong>Total Consumable Amount</strong></td>
                <td></td>
                <td></td>
                <td valign='top' style='font-size:12px; text-align: center; padding:10px 0 10px;'>₹{{ $hcfinal_consumable_amount }}</td>
            </tr>
            </td>
            </tr>
        </table>
        <table>

        </table>
        {{-- <table width='100%' cellspacing='0' cellpadding='2' border='' bordercolor='#fff'
            style="line-height: 28px; margin-bottom: 20px;">
          
                </td>
                </tr>
        </table> --}}



        {{-- <table width="100%" cellspacing="0" cellpadding="2" border="" bordercolor="#fff" style="line-height: 28px; margin-bottom: 20px;">
      <tbody><tr>

        <td width="70%" bordercolor="#ccc" bgcolor="#f2f2f2" style="font-size:12px;"><strong>Services</strong></td>
        <td bordercolor="#ccc" bgcolor="#f2f2f2" style="font-size:12px; text-align: center;"><strong>Amount</strong></td>
  
        </tr>
      <tr style="display:none; "><td colspan="*"></td></tr><tr style="border-bottom: 1px solid #0003;">

<td valign="top" style="font-size:12px; ">my product (refund)</td>
<td valign="top" style="font-size:12px; text-align: center;">3 </td>


</tr>
<tr style="border-bottom: 1px solid #0003;">
  <td><strong>Total Consumable Amount</strong></td>
  <td valign="top" style="font-size:12px; text-align: center;"> ₹{{ $final_consumable_amount }}</td>
</tr>

    </tbody></table> --}}
    @endif

    <!-- consumable close -->

    <table width='100%' cellspacing='0' cellpadding='2' border='0' style=" ">
        <tr>
            <td>
                <table width='100%' cellspacing='0' cellpadding='2' border='0'>
                    <tr>

                        <td align='' style='font-size:12px;width: 20%;'><strong>BANK DETAILS</strong></td>
                        <td align='' style='font-size:12px;width: 60%;'><strong></strong></td>
                        <td align='right' style='font-size:12px;width:30%; '>TAXABLE AMOUNT</td>
                        <td align='right' style='font-size:12px; width:10%; '>₹
                            {{ $tax_sum }}
                        <td>
                    </tr>
                    <tr>
                        <td align='' style='font-size:12px;width: 20%;'>Name :</td>
                        <td align='' style='font-size:12px;width: 60%;'>Neogen Home Care Health Technologies
                        </td>
                        <td align='right' style='font-size:12px;width:10%;'>Discount :</td>
                        <td align='right' style='font-size:12px;width:10%;'><span> &#x20b9; </span>
                            {{ $hcbooking_details->discount_amount != 0 ? $hcbooking_details->discount_amount : 0 }}</td>
                    </tr>
                    <tr>
                        <td align='' style='font-size:12px;width: 20%;'>IFSC Code</td>
                        <td align='' style='font-size:12px;width: 60%;'>ICIC0006262</td>
                        <td align='right'
                            style='font-size:12px; width:10%;border-top:1px solid #000;border-bottom:1px solid #000;'>
                            <b><strong>TOTAL AMOUNT</strong></b>
                        </td>
                        <td align='right'
                            style='font-size:12px;width:10%;border-top:1px solid #000;border-bottom:1px solid #000;'>
                            <b>₹
                                {{ $total_amount }}</b>
                        </td>
                    </tr>
                    <tr style="">
                        <td align='' style='font-size:12px;width: 20%;'>Account No :</td>
                        <td align='' style='font-size:12px;width: 60%;'>626205213147</td>
                        <td align='right' style='font-size:12px;width:10%; '><b>Recieved Amount</b></td>
                        <td align='right' style='font-size:12px;width:10%;'><b>- ₹0</b></td>
                    </tr>
                    <tr style="">
                        <td align='' style='font-size:12px;width: 20%;'>Bank :</td>
                        <td align='' style='font-size:12px;width: 60%;'>ICICI Bank , THIRUVANANTHAPURAM<br />
                            (TRIVANDRUM)</td>
                        <!-- <td  align='right' style='font-size:12px; '></td>
    <td  align='right' style='font-size:12px;'>Two Hundred Fifty</td> -->
                    </tr>

                </table>
        <tr>
            <td align='right'><b>Total Amount (in Words)</b></td>
        </tr>
        <tr>
            <td align='right'>{{ $amount_in_words }} </td>
        </tr>
        </td>
        </tr>
    </table>
    <table style="">
        <table width='100%' cellspacing='0' cellpadding='2' border='0' >
            <tr>
                <td>
                    <table width='100%' cellspacing='0' cellpadding='2' border='0'>
    
                        <tr>
                            <td align='' style='font-size:12px;width: 30%;'>
                                <strong>PAYMENT QR CODE</strong><br />
                                UPI ID : <br />neogenindia@icici
                                <br />
                                <img src="{{ asset('assets/images/phonepe.png') }}"
                                    style="width: 15%; padding:5px 0 5px 0 " alt="">
                                <img src="{{ asset('assets/images/gpay.png') }}" style="width: 15%;  padding:5px 0 5px 0"
                                    alt="">
    
                                <img src="{{ asset('assets/images/paytm.png') }}"
                                    style="width: 15%;  padding:5px 0 5px 0" alt="">
    
                                <img src="{{ asset('assets/images/upi.png') }}"
                                    style="width: 15%;  padding:5px 0 5px 0"
                                    alt="">
                            </td>
                            <td align='' style='font-size:12px;width: 20%;'> <img style="width: 50%;"
                                    src="data:image/png;base64, {!! base64_encode(
                                        QrCode::size(100)->generate(
                                            'upi://pay?pa=' .
                                                $settings->upi_account_id .
                                                '&pn=Neogen Home Care Health Technologies&tn=Neogen Home Care Health Technologies&tr=NH/SL/22-23/' .
                                                $hctask_details[0]->booking_id .
                                                '&cu=INR&mode=02&mbbnumber=' .
                                                $settings->upi_mobile_number .
                                                '&am=' .
                                                $total_amount,
                                        ),
                                    ) !!}" />
                            </td>
                            <td align='right' style='font-size:20px; '><b></b></td>
                            <td align='right' style='font-size:30px;'><b>
                                    <div class="box"
                                        style="width: 150px; border:1px solid #000; height:75px; margin-left:auto;"> </div>
                                </b></td>
                        </tr>
                        <tr>
    
    
    
                        </tr>
    
    
    
                    </table>
    
                </td>
            </tr>
        </table>
    
    
        <table width='100%' cellspacing='0' cellpadding='2' ">
            <tr>
                <td align='left' width='50%' style='' valign='top'><b>TERMS AND CONDITIONS</b><br />
                    1.Goods once sold will not be taken back or exchanged<br />
                    2.All disputes are subject to kerala jurisdiction only
                </td>
    
                <td align='right' valign='top' width='50%' align='right'><b>AUTHORISED SIGNATORY FOR</b><br />
                    Neogen Home Care Health Technologies
                </td>
            </tr>
        </table>
    </table>
   
   
    </td>
    </tr>
    </table>
</body>

</html>

