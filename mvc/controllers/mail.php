<?php
// include 'mvc/PHPMailer/src/PHPMailer.php';
// include 'mvc/PHPMailer/src/Exception.php';
// include 'mvc/PHPMailer/src/OAuth.php';
// include 'mvc/PHPMailer/src/POP3.php';
// include 'mvc/PHPMailer/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;



// $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
// try {
//     //Server settings
//     $mail->SMTPDebug = 0;                                 // Enable verbose debug output
//     $mail->isSMTP();                                      // Set mailer to use SMTP
//     $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//     $mail->SMTPAuth = true;                               // Enable SMTP authentication
//     $mail->Username = 'agletstoreuit@gmail.com';                 // SMTP username
//     $mail->Password = 'khongkhoa';                           // SMTP password
//     $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//     $mail->Port = 587;                                    // TCP port to connect to

//     //Recipients
//     $mail->setFrom('agletstoreuit@gmail.com', 'Aglet');

//     $mail->addAddress('nhoang200260@gmail.com');               // Name is optional

//     // $mail->addReplyTo('info@example.com', 'Information');
//     // $mail->addCC('cc@example.com');
//     // $mail->addBCC('bcc@example.com');

//     //Attachments
//     // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//     // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

//     //Content
//     $mail->isHTML(true);                                  // Set email format to HTML
//     $mail->Subject = 'Aglet';
//     $mail->Body    = 'Hoa don';
//     // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//     $mail->send();
//     echo 'Message has been sent';
// } catch (Exception $e) {
//     echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
// }
?>
<?php

require("mvc/PHPMailer/src/PHPMailer.php");
require("mvc/PHPMailer/src/SMTP.php");
require('mvc/PHPMailer/src/Exception.php');

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP(); // enable SMTP

$mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->IsHTML(true);
$mail->Username = "agletstoreuit@gmail.com";
$mail->Password = "esuiutesxdyjzkph";
$mail->SetFrom("agletstoreuit@gmail.com");
$mail->Subject = "Test";
$mail->Body = '
<table border="0" cellpadding="0" cellspacing="0" width="600"
  style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px">
  <tbody>
    <tr>
      <td align="center" valign="top">

        <table border="0" cellpadding="0" cellspacing="0" width="100%"
          style="background-color:#96588a;color:#ffffff;border-bottom:0;font-weight:bold;line-height:100%;vertical-align:middle;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;border-radius:3px 3px 0 0">
          <tbody>
            <tr>
              <td style="padding:36px 48px;display:block">
                <h1
                  style="font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:30px;font-weight:300;line-height:150%;margin:0;text-align:left;color:#ffffff;background-color:inherit">
                  Cảm ơn bạn đã đặt hàng</h1>
              </td>
            </tr>
          </tbody>
        </table>

      </td>
    </tr>
    <tr>
      <td align="center" valign="top">

        <table border="0" cellpadding="0" cellspacing="0" width="600">
          <tbody>
            <tr>
              <td valign="top" style="background-color:#ffffff">

                <table border="0" cellpadding="20" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                      <td valign="top" style="padding:48px 48px 32px">
                        <div
                          style="color:#636363;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left">

                          <p style="margin:0 0 16px">Xin chào {{TenKH}},</p>
                          <p style="margin:0 0 16px">Cảm ơn đã đặt hàng. Đơn hàng sẽ bị tạm
                            giữ cho đến khi chúng tôi xác nhận thanh toán hoàn thành. Trong
                            thời gian chờ đợi, đây là lời nhắc về những gì bạn đã đặt hàng:
                          </p>


                          <h2
                            style="color:#96588a;display:block;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
                            [Đơn hàng #{{MaDon}}] ({{NgayDat}})</h2>

                          <div style="margin-bottom:40px">
                            <table cellspacing="0" cellpadding="6" border="1"
                              style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;width:100%;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif">
                              <thead>
                                <tr>
                                  <th scope="col"
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                    Sản phẩm</th>
                                  <th scope="col"
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                    Số lượng</th>
                                  <th scope="col"
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                    Giá</th>
                                </tr>
                              </thead>
                              <tbody>
                                {{SanPham}}

                              </tbody>
                              <tfoot>
                                <tr>
                                  <th scope="row" colspan="2"
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">
                                    Nguyên giá:</th>
                                  <td
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px">
                                    <span>{{ThanhTien}}&nbsp;<span>₫</span></span>
                                  </td>
                                </tr>
                                <!--<tr>
																	<th scope="row" colspan="2"
																		style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
																		Phương thức thanh toán:</th>
																	<td
																		style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
																		Chuyển khoản ngân hàng</td>
																</tr>-->
                                <tr>
                                  <th scope="row" colspan="2"
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                    Tổng cộng:</th>
                                  <td
                                    style="color:#636363;border:1px solid #e5e5e5;vertical-align:middle;padding:12px;text-align:left">
                                    <span>{{TongTien}}&nbsp;<span>₫</span></span>
                                  </td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>


                          <table cellspacing="0" cellpadding="0" border="0"
                            style="width:100%;vertical-align:top;margin-bottom:40px;padding:0">
                            <tbody>
                              <tr>
                                <td valign="top" width="50%"
                                  style="text-align:left;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;border:0;padding:0">
                                  <h2
                                    style="color:#96588a;display:block;font-family:"Helvetica Neue",Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left">
                                    Thông tin người nhận</h2>

                                  <address style="padding:12px;color:#636363;border:1px solid #e5e5e5">
                                    {{TenKH}}<br>{{DiaChiNhanHang}} <br><a href="tel:{{SoDienThoai}}"
                                      style="color:#96588a;font-weight:normal;text-decoration:underline"
                                      target="_blank">{{SoDienThoai}}</a> <br><a href="mailto:{{Email}}"
                                      target="_blank">{{Email}}</a>
                                  </address>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <p style="margin:0 0 16px">Chúng tôi đang tiến hành hoàn thiện đơn
                            đặt hàng của bạn</p>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </td>
            </tr>
          </tbody>
        </table>

      </td>
    </tr>
  </tbody>
</table>

';

$mail->AddAddress("nhoang200260@gmail.com");

if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
?>