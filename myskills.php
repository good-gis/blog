<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Ivan Glushkov</title>
        <?php require "templates/connect_styles.php" ?>
		
	</head>
	
	<body>
    <?php include "templates/header.php" ?>
		
		<!-- My Skills section start -->
		<div class="section">
			<h1><span>My Skills</span></h1>
			<ul>
				<li>HTML <br />
					<progress min="0" max="100" value="80"></progress>
				</li>
				<li>CSS <br />
					<progress min="0" max="100" value="50"></progress>
				</li>
				<li>C++ <br />
					<progress min="0" max="100" value="30"></progress>
				</li>
                <li>C# <br />
                    <progress min="0" max="100" value="30"></progress>
                </li>
                <li>PHP <br />
                    <progress min="0" max="100" value="70"></progress>
                </li>
			</ul>
		</div>
		<!-- My Skills section end -->

    <?php include "templates/contacts.php" ?>
    <?php include "templates/copyright.php" ?>
	</body>
</html>