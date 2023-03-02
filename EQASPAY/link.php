<?php error_reporting(E_ALL); ini_set('display_errors', 0); ?> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
          <link rel="shortcut icon" type="image/jpg" href="images/MU.png"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Production version -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/b90e8921ff.js" crossorigin="anonymous"></script>
</script>

<!-- Production version -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script language="javascript">
function confirmed(){
    return confirm('คุณต้องการ "บันทึกข้อมูล" ใช่หรือไม่?');
}

	function signOut() {
		var text = confirm("ต้องการออกจากระบบหรือไม่ ?");
		if (text == true) {
  			window.location.href='signOut.php';
		} 	
	}
	function confirmedDelete(){
    return confirm('คุณต้องการ "ลบข้อมูล" ใช่หรือไม่?');
}
	function thankYou(){
   	return alert('งานการศึกษา สำนักงานคณบดี ขอขอบคุณสำหรับข้อเสนอแนะ / ข้อคิดเห็นของท่าน ทางเราจะนำไปปรับปรุงพัฒนาต่อไป');
}
</script>

