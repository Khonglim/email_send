<!DOCTYPE html>

<html>

<head>

	<title>ยินดีตอนรับ</title>

</head>

<body>
    <h3>  มีข้อความจากระบบ จาก BOOK AN APPOINTMENT </h3>
      
      <br>
      <b>ชื่อ:</b>{{$objDemo->fristname}} <br>
      <b>นามสกุล:</b>{{ $objDemo->lastname }} <br>
      <b>โทรศัพท์:</b>{{$objDemo->phone }} <br>
      <b>อีเมล:</b>{{ $objDemo->email }} <br>
      <b>สโตร์:</b>{{$objDemo->store }} <br>
      <b>วันที่:</b>{{ $objDemo->date }}   <br>
      <b>ข้อความ:</b>{{$objDemo->message }}
     

</body>

</html>