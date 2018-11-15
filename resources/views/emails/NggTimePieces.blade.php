<!DOCTYPE html>

<html>

<head>

	<title>ยินดีตอนรับ</title>

</head>

<body>
    <h3>มีข้อความจาก <a href="www.nggtimepieces.com">www.nggtimepieces.com</a>  ในส่วนของ Book a appointment </h3>
      <b>ชื่อ:</b>&ensp;{{$objDemo->firstname}} &ensp;
      <b>นามสกุล:</b>&ensp;{{ $objDemo->lastname }} <br>
      <b>โทรศัพท์:</b>&ensp;{{$objDemo->phonenumber }} <br>
      <b>อีเมล:</b>&ensp;{{ $objDemo->email }} <br>
      <b>สโตร์:</b>&ensp;{{$objDemo->store }} <br>
      <b>วันที่นัดหมาย:</b>&ensp;{{ $objDemo->date_reserve }}<br>
      <b>ข้อความ:</b>&ensp;{{$objDemo->message }}

      <br><br><br>
      ขอบคุณค่ะ/Thank you.

     

</body>

</html>