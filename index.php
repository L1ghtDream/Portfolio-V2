<?php 
 $page = 'home';
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LightDream | Student Developer</title>
  <meta name="description" content="LightDream - Java, Python, C# Developer">
  <meta name="author" content="LightDream">

  <meta property="og:title" content="LightDream">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://lightdream.dev/">
  <meta property="og:description" content="LightDream - Java, Python, C# Developer">
  <meta property="og:image" content="image.png">

  <link rel="icon" href="/assets/images/root/favicon.ico">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mohave:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.4.95/css/materialdesignicons.min.css" integrity="sha512-RJM8wxxnhWj3XFj27wTSVh6GEPnKuRn4M7O8x/Rq5iCPwKn9UAZnsBLCvc/zS3LbKYD7h54X8GyS9fIxHJEhNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div id="page" class="home">
    <?php include_once 'modules/nav.php'; ?>
    <div id="wrap">
        <div class="section bg">
            <small class="subTitle" data-aos="fade" data-aos-duration="1000">Hello, I am a</small>
            <h1 class="title" data-aos="zoom-in" data-aos-delay="300"><div id="sd">Student Developer</div></h1>
            <div class="continue" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
                <i class="mdi mdi-mouse"></i> Continue Scrolling...
            </div>
            <a href="#about-me">
                <div class="about-me" data-aos="fade-up" data-aos-delay="1600" data-aos-duration="1000">
                    <i class="mdi mdi-cursor-default-click"></i> About me
                </div>
            </a>
            <a href="#tech-stack">
                <div class="about-me" data-aos="fade-up" data-aos-delay="2000" data-aos-duration="1000" style="left:500px !important;">
                    <i class="mdi mdi-cursor-default-click"></i> Tech Stack
                </div>
            </a>
        </div>
        <div class="section other" id="about-me">
            <small class="subTitle" data-aos="fade">About Me</small>
            <h1 class="title" data-aos="fade">Hello, Im <span>Light</span>Dream!</h1>
            <p class="text" data-aos="fade">
            My name is Radu, I'm a 17 year old computer enthusiast.
            I'm currently studying Computer Science in Valenii de Munte, Romania
            and working as a Java Dev for Minecraft Servers and as a Game Dev
            in my free time in Unity and Unreal Engine.
            </p>
            <div class="section-links" data-aos="fade">
                <a href="/projects">
                    <i class="mdi mdi-text"></i>
                    <div class="link-text">
                        <h2>Projects</h2>
                        <p>My recent work</p>
                    </div>
                </a>
                <a href="/degrees">
                    <i class="mdi mdi-school-outline"></i>
                    <div class="link-text">
                        <h2>Degrees</h2>
                        <p>My experience</p>
                    </div>
                </a>
                <a href="/contact">
                    <i class="mdi mdi-email-fast-outline"></i>
                    <div class="link-text">
                        <h2>Contact</h2>
                        <p>Get in touch</p>
                    </div>
                </a>
            </div>
            <div class="section-links" data-aos="fade">
                <a href="#tech-stack">
                    <i class="mdi mdi-code-tags"></i>
                    <div class="link-text">
                        <h2>Tech Stack</h2>
                    </div>
                </a>
            </div>

        </div>

        <div class="section other" id="tech-stack">
        <h3>Tech Stack</h3> 
        <div class="tech-stack-container"> 
            <div class="skill"> 
                <img src="assets/images/skills/java.svg">
                <span>&nbsp;Java</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/python.svg">
                <span>&nbsp;Python</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/c++.png">
                <span>&nbsp;C++</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/csharp.svg">
                <span>&nbsp;C#</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/js.png">
                <span>&nbsp;JavaScript</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/mysql.png">
                <span>&nbsp;MySQL</span>
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/mariadb.png">
                <span>&nbsp;MariaDB</span>
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/redis.png">
                <span>&nbsp;Redis</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/docker.png">
                <span>&nbsp;Docker</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/kubernetes.png">
                <span>&nbsp;Kubernetes</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/cloudflare.png">
                <span>&nbsp;CloudFlare</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/pterodactyl.png">
                <span>&nbsp;Pterodactyl Panel</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/cloudnetv3.png">
                <span>&nbsp;CloudNet v3</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/windows.svg">
                <span>&nbsp;Windows</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/ubuntu.png">
                <span>&nbsp;Ubuntu</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/linux.png">
                <span>&nbsp;Linux</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/gcp.png">
                <span>&nbsp;Google Cloud Platform</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/aws.png">
                <span>&nbsp;Amazon Web Service</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/mongodb.png">
                <span>&nbsp;Mongo DB</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/spring.png">
                <span>&nbsp;Spring</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/django.png">
                <span>&nbsp;Django</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/nginx.png">
                <span>&nbsp;Nginx</span> 
            </div>
            <div class="skill"> 
                <img src="assets/images/skills/apache.png">
                <span>&nbsp;Apache</span> 
            </div>
        </div>
        </div>
    </div>

    
    <?php include_once 'modules/footer.php'; ?>
</div>
<a href="#" id="top">
    <i class="mdi mdi-arrow-up-thick"></i>
</a>
</body>
</html>
