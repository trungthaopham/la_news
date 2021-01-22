<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use Illuminate\Support\Facades\Session;

class GuimailController extends Controller
{
    function guimaillienhe(Request $request)
    {
        $input = $request->all();
        Mail::send(
            '/Component/mau-thu-lien-he',
            array(
                'name' => $input["name"],
                'email' => $input["email"],
                'content' => $input['message'],
                'subject' => $input['subject'],
                'phone' => $input['phone'],
            ),
            function ($message) {
                $message->from('thaoptps11170@fpt.edu.vn', 'Người liên hệ')
                    ->to('thaoptps11170@fpt.edu.vn', 'Ban Quản Trị')
                    ->subject('Thư liên hệ');
            }
        );
        // Session::flash('thongbao', 'Đã gửi mail thành công');
        echo "Gưi mail thành công";
    }
}
