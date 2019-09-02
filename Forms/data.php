<<?php 

	$connect = mysqli_connect("my host","my user","my passwrod","my db");

	mysqli_query($connect,"INSERT INTO hrdc(course_type , course_name, name, dob, category, college_address, state_first, pin_first, tel_first, mailing_address, state_second, pin_second, mobile_number, email)

	VALUES ('$_POST[course_type]', '$_POST[course_name]', '$_POST[name]', '$_POST[dob]', '$_POST[category]', '$_POST[college_address]', '$_POST[state_first]', '$_POST[pin_first]', '$_POST[tel_first]', '$_POST[mailing_address]', '$_POST[state_second]',, '$_POST[pin_second]', '$_POST[mobile_number]', '$_POST[email]')";

 ?>