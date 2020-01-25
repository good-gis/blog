<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Расписание</title>
        <?php require "templates/connect_styles.php" ?>
		
	</head>
	
	<body>
    <?php include "templates/header.php" ?>
		
		
		
		
		<!-- My Schedule section start -->
		<div class="section">
			<h1><span>Расписание</span></h1>
			<table>
				<tr>
					<th>Day</th>
					<th>Mon</th>
					<th>Tue</th>
					<th>Wed</th>
					<th>Thu</th>
					<th>Fri</th>
				</tr>
				<tr>
					<td>07:00-7:30</td>
					<td class="selected">My morning's work</td>
					<td class="selected">My morning's work</td>
					<td class="selected">My morning's work</td>
					<td class="selected">My morning's work</td>
					<td class="selected">My morning's work</td>
				</tr>
				<tr>
					<td>09:00-18:00</td>
					<td class="selected">Work for the company</td>
					<td class="selected">Work for the company</td>
					<td class="selected">Work for the company</td>
					<td class="selected">Work for the company</td>
					<td class="selected">Work for the company</td>
				</tr>
				<tr>
					<td>18:00-19:30</td>
					<td class="selected">Free time</td>
					<td class="selected">Free time</td>
					<td class="selected">Free time</td>
					<td class="selected">Free time</td>
					<td class="selected">Free time</td>
				</tr>
				<tr>
					<td>19:45-21:00</td>
					<td class="selected">Learning PHP</td>
					<td class="selected">Learning codeception</td>
					<td class="selected">Learning PHP</td>
					<td class="selected">Learning JS</td>
					<td class="selected">Learning PHP</td>
				</tr>
				<tr>
					<td>21:00-22:15</td>
					<td class="selected">Watching films</td>
					<td class="selected">Watching news</td>
					<td class="selected">Free time</td>
					<td class="selected">Free time</td>
					<td class="selected">Free time</td>
				</tr>
			</table>
		</div>
		<!-- My Schedule section end -->

    <?php include "templates/contacts.php" ?>
    <?php include "templates/copyright.php" ?>
		
	</body>
</html>