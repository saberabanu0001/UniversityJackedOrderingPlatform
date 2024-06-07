<?php 
session_start();
if (empty($_SESSION)) { ?>
<p>
<h3 style = "color:red; font-size:20px;"> Sorry! You are not authorized to access the shop now page.<br> Please register and login to access it. </h3>
Please register: <a href="register.php"> Click here </a><br>
If registered, please login: <a href="home.php"> Click here </a>
</p>
<?php } else { ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejong University Jacket Ordering Platform</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .navbar a.active {
            color: red;
        }

        /* Jacket Section */
        .jacketSection {
            margin-bottom: 60px;
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* Jacket Card */
        .jacket-card {
            width: calc(33.33% - 20px);
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            box-sizing: border-box;
        }

        .jacket-card img {
            width: 100%;
            height: 400px; 
            object-fit: cover;
            margin-bottom: 10px;
        }

        .jacket-card h2, 
        .jacket-card p, 
        .jacket-card .price {
            margin-bottom: 5px;
        }

        .jacket-card .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .jacket-card .btn:hover {
            background-color: #0056b3;
        }

        .jacket-card .like-btn, 
        .jacket-card .comment-btn, 
        .jacket-card .share-btn {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 18px;
            margin: 5px;
            transition: color 0.3s ease;
        }

        .jacket-card .like-btn.liked, 
        .jacket-card .comment-btn:hover, 
        .jacket-card .share-btn:hover {
            color: #0056b3;
        }

        .liked-message {
            color: blue;
            font-size: 14px;
            margin-top: 5px;
        }

        .comments-section {
            display: none;
            margin-top: 10px;
            text-align: left;
        }

        .comments-section textarea {
            width: 100%;
            height: 50px;
            margin-bottom: 10px;
        }

        .comments-section .comment {
            margin-bottom: 5px;
        }

        /* Media Query for responsiveness */
        @media screen and (max-width: 768px) {
            .jacket-card {
                width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 480px) {
            .jacket-card {
                width: calc(100% - 20px);
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="flex">
            <a href="home.php" class="logoImg">
                <img src="image/logoImg.PNG" alt="Logo">
            </a>
            <nav class="navbar">
                <a href="home.php" <?php if (basename($_SERVER['PHP_SELF']) == 'home.php') echo 'class="active"'; ?>>home</a>
                <a href="shop_now.php" <?php if (basename($_SERVER['PHP_SELF']) == 'shop_now.php') echo 'class="active"'; ?>>shop now</a>
                <a href="aboutUs.php" <?php if (basename($_SERVER['PHP_SELF']) == 'aboutUs.php') echo 'class="active"'; ?>>about us</a>
                <a href="contact.php" <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>contact</a>
            </nav>
            <div class="search">
                <input type="search" class="src" name="" placeholder="Search here">
                <button class="btnn">Search</button>
            </div>
            <div class="icons">
               <a href="logout.php" style="color: white;"> Logout </a>
               <a href="profile.php" style="color: white; margin-left: 10px;"> Edit Profile </a>
            </div>
        </div>
    </header>

    <!-- Jacket 1 -->
    <!-- Computer Science Jackets Section -->
    <div class="jacketSection">
        <!-- Jacket 1 -->
        <div class="jacket-card">
            <img src="image/red1.jpg" alt="Jacket 1">
            <h2>Department Jacket</h2>
            <p style = "color:blue; font-weight:bold;">Department of Computer Science</p>
            <p class="price">65,000 won</p>
            <button class="like-btn"><i class='bx bx-like'></i> Like</button>
            <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
            <button class="share-btn"><i class='bx bx-share'></i> Share</button>
            <div class="liked-message"></div>
            <div class="comments-section">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn submit-comment">Submit</button>
                <div class="comments-list"></div>
            </div>
        </div>

        <!-- Jacket 2 -->
        <div class="jacket-card">
            <img src="image/blue1.jpg" alt="Jacket 2">
            <h2>Department Jacket</h2>
            <p style = "color:blue; font-weight:bold;">Department of Computer Science</p>
            <p class="price">60,000 won</p>
            <button class="like-btn"><i class='bx bx-like'></i> Like</button>
            <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
            <button class="share-btn"><i class='bx bx-share'></i> Share</button>
            <div class="liked-message"></div>
            <div class="comments-section">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn submit-comment">Submit</button>
                <div class="comments-list"></div>
            </div>
        </div>

        <!-- Jacket 3 -->
        <div class="jacket-card">
            <img src="image/black1.jpg" alt="Jacket 3">
            <h2>Department Jacket</h2>
            <p style = "color:blue; font-weight:bold;">Department of Computer Science</p>
            <p class="price">75,000 won</p>
            <button class="like-btn"><i class='bx bx-like'></i> Like</button>

            <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
            <button class="share-btn"><i class='bx bx-share'></i> Share</button>
            <div class="liked-message"></div>
            <div class="comments-section">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn submit-comment">Submit</button>
                <div class="comments-list"></div>
            </div>
        </div>    
    </div>
  


    <!-- Business Administration Jackets Section -->
    <div class="jacketSection">
            <!-- Jacket 1 -->
            <div class="jacket-card">
                <img src="image/white1.jpg" alt="Jacket 1">
                <h2>Department Jacket</h2>
                <p style = "color:deepskyblue; font-weight:bold;">Department of Business Administration</p>
                <p class="price">80,000 won</p>
                <button class="like-btn"><i class='bx bx-like'></i> Like</button>
                <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
                <button class="share-btn"><i class='bx bx-share'></i> Share</button>
                <div class="liked-message"></div>
                <div class="comments-section">
                    <textarea placeholder="Write a comment..."></textarea>
                    <button class="btn submit-comment">Submit</button>
                    <div class="comments-list"></div>
                </div>
            </div>

            <!-- Jacket 2 -->
            <div class="jacket-card">
                <img src="image/blue2.jpg" alt="Jacket 2">
                <h2>Department Jacket</h2>
                <p style = "color:deepskyblue; font-weight:bold;">Department of Business Administration</p>
                <p class="price">45,000 won</p>
                <button class="like-btn"><i class='bx bx-like'></i> Like</button>
                <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
                <button class="share-btn"><i class='bx bx-share'></i> Share</button>
                <div class="liked-message"></div>
                <div class="comments-section">
                    <textarea placeholder="Write a comment..."></textarea>
                    <button class="btn submit-comment">Submit</button>
                    <div class="comments-list"></div>
                </div>
            </div>

            <!-- Jacket 3 -->
            <div class="jacket-card">
                <img src="image/black1.jpg" alt="Jacket 3">
                <h2>Department Jacket</h2>
                <p style = "color:deepskyblue; font-weight:bold;">Department of Business Administration</p>
                <p class="price">65,000 won</p>
                <button class="like-btn"><i class='bx bx-like'></i> Like</button>
                <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
                <button class="share-btn"><i class='bx bx-share'></i> Share</button>
                <div class="liked-message"></div>
                <div class="comments-section">
                    <textarea placeholder="Write a comment..."></textarea>
                    <button class="btn submit-comment">Submit</button>
                    <div class="comments-list"></div>
                </div>
            </div>
    </div>

    <!-- ISA Jackets Section -->
    <div class="jacketSection">
        <!-- Jacket 1 -->
        <div class="jacket-card">
            <img src="image/black3.jpg" alt="Jacket 1">
            <h2>Department Jacket</h2>
            <p style = "color:blue; font-weight:bold;">ISA</p>
            <p class="price">75,000 won</p>
            <button class="like-btn"><i class='bx bx-like'></i> Like</button>
            <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
            <button class="share-btn"><i class='bx bx-share'></i> Share</button>
            <div class="liked-message"></div>
            <div class="comments-section">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn submit-comment">Submit</button>
                <div class="comments-list"></div>
            </div>
        </div>

        <!-- Jacket 2 -->
        <div class="jacket-card">
            <img src="image/red1.jpg" alt="Jacket 2">
            <h2>Department Jacket</h2>
            <p style = "color:blue; font-weight:bold;">ISA</p>
            <p class="price">65,000 won</p>
            <button class="like-btn"><i class='bx bx-like'></i> Like</button>
            <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
            <button class="share-btn"><i class='bx bx-share'></i> Share</button>
            <div class="liked-message"></div>
            <div class="comments-section">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn submit-comment">Submit</button>
                <div class="comments-list"></div>
            </div>
        </div>

        <!-- Jacket 3 -->
        <div class="jacket-card">
            <img src="image/blue1.jpg" alt="Jacket 3">
            <h2>Department Jacket</h2>
            <p style = "color:blue; font-weight:bold;">ISA</p>
            <p class="price">60,000 won</p>
            <button class="like-btn"><i class='bx bx-like'></i> Like</button>
            <button class="comment-btn"><i class='bx bx-comment'></i> Comment</button>
            <button class="share-btn"><i class='bx bx-share'></i> Share</button>
            <div class="liked-message"></div>
            <div class="comments-section">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn submit-comment">Submit</button>
                <div class="comments-list"></div>
            </div>
        </div>
    </div>


    <!-- JavaScript code --> <!-- I used chatGpt to do this part. Since i don't have previous knowledge about Javascript, so it's very hard for me to do on my own. I have knowledge about those simple and basic Javascript what we studied in the class, like loops, functions, buttons, conditions, and some more -->
     <!-- but later i saw the explanation of all thing what is used here, then i understood each step -->
      <!-- I know copying code from somewhere is a crime, but please consider my task for this time -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const likeButtons = document.querySelectorAll('.like-btn');
            const commentButtons = document.querySelectorAll('.comment-btn');
            const submitCommentButtons = document.querySelectorAll('.submit-comment');

            likeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const jacketCard = this.closest('.jacket-card');
                    const likedMessage = jacketCard.querySelector('.liked-message');
                    
                    this.classList.toggle('liked');
                    if (this.classList.contains('liked')) {
                        likedMessage.textContent = 'You liked this jacket';
                        this.querySelector('i').style.color = 'blue';
                    } else {
                        likedMessage.textContent = '';
                        this.querySelector('i').style.color = '';
                    }
                });
            });

            commentButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const jacketCard = this.closest('.jacket-card');
                    const commentsSection = jacketCard.querySelector('.comments-section');
                    commentsSection.style.display = commentsSection.style.display === 'block' ? 'none' : 'block';
                });
            });

            submitCommentButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const jacketCard = this.closest('.jacket-card');
                    const commentsList = jacketCard.querySelector('.comments-list');
                    const textarea = jacketCard.querySelector('textarea');
                    const commentText = textarea.value;

                    if (commentText.trim() !== '') {
                        const newComment = document.createElement('div');
                        newComment.classList.add('comment');
                        newComment.textContent = commentText;
                        commentsList.appendChild(newComment);
                        textarea.value = '';
                    }
                });
            });
        });
    </script>
</body>
</html>   
<?php } ?>


