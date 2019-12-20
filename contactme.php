<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Ivan Glushkov</title>
        <?php require "templates/connect_styles.php" ?>
		
	</head>
	
	<body>
    <?php include "templates/header.php" ?>
			<!-- Form section start -->
			<div class="section">
				<h1><span>Contact Me</span></h1>
				
				<svg class="face" height="100" width="100">
					<circle cx="50" cy="50" r="50" fill="#FDD835"/>
					<circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
					<circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
					<circle cx="30" cy="30" r="5" fill="#000000"/>
					<circle cx="70" cy="30" r="5" fill="#000000"/>
					<path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
				</svg>
					 
				<form action="templates/check.php" method="post">
                    <label>
                        <input name="name" placeholder="Name" type="text" required />
                    </label><br/>
                    <label>
                        <input name="email" placeholder="Email" type="email" required />
                    </label><br/>
                    <label>
                        <textarea name="message" placeholder="Message" required ></textarea>
                    </label>
                    <input type="submit" value="SEND" class="submit" />
				</form>
			</div>
			<!-- Form section end -->
    <?php include "templates/contacts.php" ?>
    <?php include "templates/copyright.php" ?>
	</body>
</html>