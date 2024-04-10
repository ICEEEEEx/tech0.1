<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>
 -->



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <nav id="navbar">
        <a href="#section0"><div class="brand" id="brand">DT</div></a>
        <div class="brand" id="page-name">PAGRINDINIS</div>

            <div class="nav-buttons">
                <!-- <a href="login.php"><button class="admin-button">Admin</button></a> -->
                    <div class="dropdown">
                        <button class="dropdown-button">Navigate</button>
                        <div class="dropdown-content">
                            <a href="#section1">Igudziai</a>
                            <a href="#section2">Post'ai</a>
                            <a href="#section3">Pomegiai</a>
                            <br>
                            <!-- <a href="login.php"><button class="admin-button">Admin</button></a> -->
                            <a href="login.php" style="color: green;">Admin</a>
                        </div>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="frontpage" id="section0">
            <div class="cover-photo"></div>
            <div class="content-wrapper">
                <div class="box1">
                    <h1>Donatas Tadaravičius</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et recusandae voluptas labore dolore cupiditate architecto, laborum expedita dolorum non perferendis consectetur eum. Aliquid corporis suscipit rerum recusandae repudiandae soluta! Dicta quae in fugiat, mollitia, iusto ullam temporibus asperiores nesciunt quam, nisi exercitationem dolorem reiciendis voluptate veritatis cupiditate placeat culpa. Quod!</p>
                </div>  
                <div class="box2">
                    <img src="portrait.png" alt="Portrait of Donatas Tadaravičius" id="personal-photo">
                </div>
            </div>               
        </div>


        <div class="content-container">


            <div class="skills-container" id="section1">
                <h1>Igudziai</h1>
                <div class="card-container">
                    <!-- Oval-shaped hoverable cards will be inserted here -->
                    <?php
                        function generateSkillCard($title, $description, $color) {
                            echo '<div class="skill-card '. $color .'":>';
                            echo '<div class="skill-info">';
                            echo '<h3 class="skill-title">' . $title . '</h3>';
                            echo '<p class="skill-description">' . $description . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                        //5 skill cards
                        generateSkillCard("Skill 1", "Description of Skill 1", "green");
                        generateSkillCard("Skill 2", "Description of Skill 2", "orange");
                        generateSkillCard("Skill 3", "Description of Skill 3", "blue");
                        generateSkillCard("Skill 4", "Description of Skill 4", "red");
                        generateSkillCard("Skill 5", "Description of Skill 5", "pink");
                    ?>
                </div>
            </div>
            <!-- carousel vietoj situ ^^^^^^^^^^ -->
            

            <div class="postsz-container" id="section2">
                <h1>Posts</h1>

                <?php $posts = json_decode(file_get_contents('Jsons/posts.json'), true); ?>
                <div class="posts-container" id="postContainer">
                    <!-- Post'ai dinamiskai prisideda cia (js) -->
                </div>
                <div class="">
                    <button class="posts-button" id="moreBtn">More</button>
                    <button class="posts-button" id="hideBtn" style="display: none;">Hide</button>
                </div>
            </div>

            <div class="hobbiez-container" id="section3">
                <h1>Hobby Cards</h1>
                <div class="card-hobbies-container">
                    <?php
                    // hobby korteles is JSON file'o
                    $hobbies = json_decode(file_get_contents('Jsons/hobbies.json'), true);
                    
                    // Display each hobby card
                    foreach ($hobbies as $hobby) {
                        echo '<div class="hobby-card">';
                        echo '<div class="img-container">';
                        echo '<img src="' . $hobby['backgroundImage'] . '" alt="Background Image" class="background-image">';
                        echo '<img src="' . $hobby['coolerImage'] . '" alt="Cooler Image" class="cooler-image">';
                        echo '</div>';
                        echo '<div class="card-content">';
                        echo '<h2 class="hobby-name">' . $hobby['hobbyName'] . '</h2>';
                        echo '<p>' . $hobby['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>



        </div>
        <footer>
            <div class="footer-content">
                <div class="footer-date-div">
                    <p>&copy; <?php echo date("Y"); ?> DT.</p>
                </div>
                <div class="footer-links-div"> 
                    <ul class="footer-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </footer>

    
    </div>


    <script src="script.js"></script>
    <script src="script-posts.js"></script>
</body>
</html>