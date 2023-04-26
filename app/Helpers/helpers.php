<?php
use Illuminate\Support\Facades\DB;

function bookingIdGenerator($id){
    $id = \Carbon\Carbon::now()->format('Ym'). 100000 + $id;
    return $id;
}

function getCountryForSelectArr(): ?array
{
    return \App\Models\Country::pluck('country_name', 'id')->toArray();
}
function getStateForSelectArr(): ?array
{
    return \App\Models\State::pluck('state_name', 'id')->toArray();
}
function getCityForSelectArr(): ?array
{
    return \App\Models\City::pluck('name', 'id')->toArray();
}


// profile complete percentage

function getCoordinatorsSelectArr(): ?array{
    return \App\Models\User::select(DB::raw("CONCAT(users.first_name,' ',users.last_name) AS member_name"),'id')
    ->where('users.is_coordinator',1)->where('users.is_active',1)->pluck('member_name', 'id')->toArray();
}


// function checkArealatlong($userLat,$userLng)
//     {
//         $delivery_areas = DB::table('managelocations')->get();
//         $is_enabled = '';
//         $i=0;
//         foreach ($delivery_areas as $area) {
//             $geofence = new \Location\Polygon();
//                 $newdata = DB::table('managelocations')->where('id',$area->id)->first();
//                 $geoJson = json_decode($newdata->location_bounds);
//                 foreach ($geoJson->features as $feature) {
//                     foreach ($feature->geometry->coordinates[0] as $key => $value) {
//                         $geofence->addPoint(new \Location\Coordinate($value[1], $value[0]));
//                     }
//                 }
//             $outsidePoint = new \Location\Coordinate($userLat, $userLng);
//             $check = $geofence->contains($outsidePoint);
//             if($check == 1){
//                 $is_enabled = $area->id;
//             }
//             $i++;
//         }
//         return $is_enabled;
//     }




// Firebase notification
function sendNotificationToFirebase($usersDeviceToken, $notificationDetails)
{
    // dd($notificationDetails);
    $from = 'AAAACYVLf-c:APA91bHLnedC6FBG_iytC0dA93J-ZnxHvwSO8wlWD8n14Zr6Fxr-sPN4HW8_stmB-xMeagCIfxYA_oO7ZfBFICDljHfResg5sVdR7ovH4xx0_St9Vu5r-LwHJo3kf9RuA7gBStyBy6xr';
    $msg = array(
        'body'  => $notificationDetails['body'],
        'title' =>  $notificationDetails['title'],
        'booking_id' =>$notificationDetails['booking_id'],
        'receiver' => 'erw',
        // 'icon'  => env('APP_URL') . '/storage/' . $notificationDetails[0]->photo_url,/*Default Icon*/
        'sound' => 'mySound'/*Default sound*/
    );

    $fields = array(
        'to' => $usersDeviceToken,
        'notification'  => $msg
    );

    $headers = array(
        'Authorization: key=' . $from,
        'Content-Type: application/json'
    );
    //#Send Reponse To FireBase Server
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
    $result = curl_exec($ch);
    // dd($result);
    curl_close($ch);
}

// function sendWebNotification()
//     {

//         $url = 'https://fcm.googleapis.com/fcm/send';
//         // $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();

//         $serverKey = 'server key goes here';

//         $data = [
//             "registration_ids" => $FcmToken,
//             "notification" => [
//                 "title" => $request->title,
//                 "body" => $request->body,
//             ]
//         ];
//         $encodedData = json_encode($data);

//         $headers = [
//             'Authorization:key=' . $serverKey,
//             'Content-Type: application/json',
//         ];

//         $ch = curl_init();

//         curl_setopt($ch, CURLOPT_URL, $url);
//         curl_setopt($ch, CURLOPT_POST, true);
//         curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//         curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
//         // Disabling SSL Certificate support temporarly
//         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//         curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
//         // Execute post
//         $result = curl_exec($ch);
//         if ($result === FALSE) {
//             die('Curl failed: ' . curl_error($ch));
//         }
//         // Close connection
//         curl_close($ch);
//         // FCM response
//         dd($result);
//     }


function getBloodGroupSelectArr(): ?array{
    return \App\Models\BloodGroup::pluck('name', 'id')->toArray();
}



 function numberToWord($num = '')
    {
        $num    = ( string ) ( ( int ) $num );

        if( ( int ) ( $num ) && ctype_digit( $num ) )
        {
            $words  = array( );

            $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );

            $list1  = array('','one','two','three','four','five','six','seven',
                'eight','nine','ten','eleven','twelve','thirteen','fourteen',
                'fifteen','sixteen','seventeen','eighteen','nineteen');

            $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
                'seventy','eighty','ninety','hundred');

            $list3  = array('','thousand','million','billion','trillion',
                'quadrillion','quintillion','sextillion','septillion',
                'octillion','nonillion','decillion','undecillion',
                'duodecillion','tredecillion','quattuordecillion',
                'quindecillion','sexdecillion','septendecillion',
                'octodecillion','novemdecillion','vigintillion');

            $num_length = strlen( $num );
            $levels = ( int ) ( ( $num_length + 2 ) / 3 );
            $max_length = $levels * 3;
            $num    = substr( '00'.$num , -$max_length );
            $num_levels = str_split( $num , 3 );

            foreach( $num_levels as $num_part )
            {
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';

                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
            {
                $commas = $commas - 1;
            }

            $words  = implode( ', ' , $words );

            $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
            if( $commas )
            {
                $words  = str_replace( ',' , ' and' , $words );
            }

            return $words;
        }
        else if( ! ( ( int ) $num ) )
        {
            return 'Zero';
        }
        return '';
    }
