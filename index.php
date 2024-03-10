<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Portfolio</title>
    <link rel="stylesheet" href="style3.css">
    <script src="https://kit.fontawesome.com/b8e9ef3899.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="efor.jpg" class="logo" alt="Logo">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Hobbies</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Portfolio</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <p>A CUTE STUDENT</p>
                <h1> Hi, My Name is Jan Elmo Portin</h1>
            </div>  
        </div>
    </div>  
 
    <!-- --------about-------- -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="yee.png" alt="About Image">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p> I am Jan Elmo Robles Portin, a 20-year-old born and raised in Isabela province. My favorite color is black, sometimes white. 
                        My favorite pet is a puppy, and my favorite food is fried frog. I am a nice friend and classmate, and my goal is to become a police officer, which I want to attain one day.
                        </p>
 
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links active-link" onclick="opentab('hobbies')">Hobbies</p>
                        <p class="tab-links active-link" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="Skills">
                        <ul>
                            <li><span>Good Cook</span><br>I can cook all the dishes that you wish becasue your wish is my command.</li>
                            <li><span>Singer</span><br>I can sing like Beyonce's halo. My voice is like an angel in the sky.</li>
                            <li><span>Swimmer</span><br>I can swim on a 3 ft pool.</li>
                        </ul>    
                   </div>
                   <div class="tab-contents active-tab" id="BMI">
                        <ul>
                            <li><span>SCROLL DOWN</span><br> You will see my hobbies.</li>
                            <li><span></span><br></li>
                            <li><span></span><br></li>
                        </ul>
                    </div>
                    <div class="tab-contents active-tab" id="Education">
                        <ul>
                            <li><span>2015 - 2016</span><br>Siloam Christian Academy</li>
                            <li><span>2017 - 2022</span><br>NCBA - FAIRVIEW</li>
                            <li><span>2023 (current)</span><br>National University-Fairview</li>
                        </ul>
                    </div>
               </div>
          </div>
     </div>
 </div>
<!-- ----------Hobbies---------- -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My Hobbies</h1>
        <div class="services-list">
           <div>
            <i class="fa-solid fa-basketball"></i>
                <h2>Playing Basketball </h2>
                <p>Basketball is not a hobby for me, so why? Because I fell in love with basketball, I can play it every day and never get tired of it;
                     in fact, I will push and seek to improve myself every day. Basketball is everything to me; it is my first love.
                </p>
                <a href="#">Learn More</a>
         </div>
         <div>
            <i class="fa-solid fa-pen-nib"></i>
            <h2>Counting the Stars</h2>
            <p>One of my daily pastimes is counting stars as the night draws in because there's something about me that keeps
                letting me know. That quotation is, And now each night, I count the stars. And each night I get the same number.
                And when the stars won't come to be counted, I count the holes they leave.</p>
            <a href="#">Learn more</a>
      </div>
       <div>
        <i class="fa-solid fa-heart"></i>
        <h2>Taking Pictures</h2>
        <p>Taking images is vital to me, which is why it has become a hobby; photographing each memory practically every day is regarded as a gem in my opinion.
             Because photographs are the last thing people will remember. So snap photographs while it's exist because one day it'll be a memory.</p>
        <a href="#">Learn more</a>
     </div>
   </div>
 </div>  
</div>
<!-- ---------portfolio----------- -->
<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My Achievements</h1>
        <div class="Achievements-list">
            <div class="Achievements">
                <img src="wen.png" alt="Achievement 1">
                <div class="layer">
                    <h3>Got my freshly picked Santol</h3>
                    <p> It is my first time picking a
                         fruit from a tree. (it is Achievement for me)</p>
            </div>
            <div class="Achievements">
                <img src="tayon.png" alt="Achievement 2">
                <div class="layer">
                    <h3>Graduated in Primary</h3>
                    <p> It is my first time to get an award
                        from school and that time little me was very happy.</p>
            </div>
            <div class="Achievements">
    <img src="enka.png" alt="Achievement 3">
    <div class="layer">
        <h3>My First time shopping</h3>
        <p>This is Achievement for me because this is the first time going outside with no one else beside me.</p>
        <br><br><button onclick="logout()" style="background-color: black; color: white;">Logout</button></br></br>
    </div>
</div>
<script>
    function logout() {
        window.location.href = 'logout.php';
    }
</script>
            </div>
        </div>
    </div>
</div>
<!-- ----------Contact---------- -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">Contact Me</h1>
        <div class="services-list">
            <div id="services">
                <div class="container">
                    <h1 class="sub-title"></h1>
                    <div class="services-list">
                       <div>
                        <i class="fa-solid fa-basketball"></i>
                        <div id="contact">
    <div class="container">
        <h1 class="sub-title">Contact Me</h1>
        <div class="contact-info">
            <h2>
                Facebook: <a href="https://www.facebook.com/janelmo14">Jan Elmo</a><br>
                Instagram: <a href="https://www.instagram.com/jnlmorbls14/">@jnlmorbls14</a><br>
                Contact: <a href="tel:+639615431188">09615431188</a>
            </h2>
            <p>Thanks!!</p>
        </div>
    </div>
</div>

            
<div>
    <script>
        var tablinks = document.querySelectorAll(".tab-links");
        var tabcontents = document.querySelectorAll(".tab-contents");
   
        function opentab(tabName) {
            for (let i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active-link");
                tabcontents[i].classList.remove("activetab");
            }
   
            const activeTabIndex = Array.from(tablinks).findIndex(
                (tablink) => tablink.innerText.toLowerCase() === tabName.toLowerCase()
            );
   
            tablinks[activeTabIndex].classList.add("active-link");
            tabcontents[activeTabIndex].classList.add("activetab");
        }
    </script>
   
   
</body>
</html>