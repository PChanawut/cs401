<?php
	//https://www.youtube.com/watch?v=jrwFt3FBsQk
	include('phpmailer/PHPMailerAutoload.php');
	header('Content-Type: text/html; charset=utf-8');
	$mail = new PHPMailer;
	$mail->CharSet = "utf-8";
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$gmail_username = "cs401demoproject@gmail.com"; // gmail ที่ใช้ส่ง
	$gmail_password = "Cs401project"; // รหัสผ่าน gmail
	// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1

	$sender = "สํานักงานปรมาณูเพื่อสันติ ตัวอย่าง"; // ชื่อผู้ส่ง
	$email_sender = "cs401demoproject@gmail.com"; // เมล์ผู้ส่ง 
	$email_receiver = "superhipee@hotmail.com"; // เมล์ผู้รับ ***
	$subject = "ยืนยันการสมัครสมาชิก"; // หัวข้อเมล์
	$mail->Username = $gmail_username;
	$mail->Password = $gmail_password;
	$mail->setFrom($email_sender, $sender);
	$mail->addAddress($email_receiver);
	$mail->Subject = $subject;
	$email_content = "
		<!DOCTYPE html>
		<html>
			<head>
				<meta charset=utf-8'/>
				<title>ทดสอบการส่ง Email</title>
			</head>
			<body>
				<h1 style='font-size:20px;color:white;' >
					ท่านสามารถเข้าสู่ระบบของทาง สํานักงานปรมาณูเพื่อสันติ
				</h1>
			</body>
		</html>
	";

	//  ถ้ามี email ผู้รับ
	if($email_receiver){
		$mail->msgHTML($email_content);
		if (!$mail->send()) {  // สั่งให้ส่ง email
			// กรณีส่ง email ไม่สำเร็จ
			// echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
			// echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
		}else{
			// กรณีส่ง email สำเร็จ
			// echo "ระบบได้ส่งข้อความไปเรียบร้อย";
		}	
	}
?>