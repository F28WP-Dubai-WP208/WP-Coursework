<?php
	include('functions.php');

if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" type="text/css" href="car_maze_css.css" media="all" />

    <title>Maze Game Deluxe</title>
</head>
<header>
    <div class = "flex">
        <div class = "logo">
            <a href = "#"><img src="pics/logo.jpg" width="150" height="60"  alt="CarGame Logo"/>

        </div>
        <nav>
            <button id="nav-toggle" class="hamburger-menu">
                <span class="strip"></span>
                <span class="strip"></span>
                <span class="strip"></span>
            </button>
            <ul id="nav-menu-continer">
                <li><a href="#">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Contact</a></li>


            </ul>
        </nav>
        <div id="login-register-button">
		<div>
				<?php if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
			</div>
    </div>
</header>
<main>
    <section id = "car-picture">
        <div class="car-game-text">
            <h1>The Best <span>Car Maze</span> Game Out There</h1>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor velit eget nisi porttitor maximus. Nulla sed nulla nunc. Proin sem nulla, varius sed dolor vitae, venenatis vulputate tellus. Etiam in sem eu sapien malesuada tincidunt. Morbi tristique sit amet justo at condimentum. Mauris a ligula et enim fringilla mattis quis sit amet nunc. Sed fringilla ullamcorper neque, vitae ultricies massa suscipit nec.</h5>
    
            
            <div class="circle">

                <div class="circle-txt">
                    
                <a href="maze.html">

                    Let's start!</div>
            </div>
        </a>
        </section>

<body>

<section id="posts-comments">
    <div class="flex">
        <div class="game-maze">
            <img src="pics/logo.jpg"/>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor velit eget nisi porttitor maximus.</p>
        </div>
       
        <div class="posts-comments-box">
            <h3>Latest Posts</h3>
            <div class="post-item">
                <img src="pics/pp1.jpg" />
                <div>
                    <h5>June 21, 2019</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor velit eget nisi porttitor maximus. </p>
                    <small>By: Admin</small>
                </div>
            </div>

            <div class="post-item">
                <img src="pics/pp2.jpg"/>
                <div>
                    <h5>June 21, 2019</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempor velit eget nisi porttitor maximus. </p>
                    <small>By: Admin</small>
                </div>
            </div>
        </div>

        <div class="posts-comments-box">
            <h3>Top Comments</h3>
            <div class="comments-item">
                <img src="pics/pp4.jpg"/>
                <div>
                    <p><span class="author">Jane Doe</span><span>on</span>Lorem ipsum dolor sit amet, consectetur.</p>
                    <h5> June 21,2019</h5>
                
                </div>
            </div>

            <div class="comments-item">
                <img src="pics/pp5.jpg"/>
                <div>
                    <p><span class="author">Jane Doe</span><span>on</span>Lorem ipsum dolor sit amet, consectetur.</p>
                    <h5> June 21,2019</h5>
                
                </div>  
            </div>

            <div class="comments-item">
                <img src="pics/pp6.jpg"/>
                <div>
                    <p><span class="author">Jane Doe</span><span>on</span>Lorem ipsum dolor sit amet, consectetur.</p>
                    <h5> June 21,2019</h5>
                
                </div>   
            </div>

            <div class="comments-item">
                <img src="pics/pp7.jpg"/>
                <div>
                    <p><span class="author">Jane Doe</span><span>on</span>Lorem ipsum dolor sit amet, consectetur.</p>
                    <h5> June 21,2019</h5>
                
                </div>  
            </div>

        </div>
    </div>
</section>

</section>
</main>
<footer>
    <div class="flex">
        <small><p>Copyright &copy; 2020 All rights reserved | This template is made with <span class = "footer-heart">&#9829;</span>by WP-208.</p></small>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>

            <li>
                <a href="#">Blog</a>
            </li>

            <li>
                <a href="#">Forum</a>
            </li>

            <li>
                <a href="#">Contact</a>
            </li>

        </ul>
    </div>
</footer>
</body>
<body>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
</body>
</html>