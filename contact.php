<?php 
 $page = 'contact';
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LightDream | Contact</title>
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
<div id="page" class="float-nav">
    <?php include_once 'modules/nav.php'; ?>
    <div id="wrap">
        <div class="section contact bg">
          <div class="container">
            <div class="pageTitle" data-aos="fade" data-aos-duration="1000">Contact</div>
            <div class="grid" data-aos="fade" data-aos-duration="1000">
              <a href="mailto:radu.voinea.mihai@gmail.com" target="_blank" class="grid-card">
                <div class="image"><i class="mdi mdi-mail"></i></div>
                <div class="name">Email Me</div>
              </a>
              <a href="https://discord.com/" target="_blank" class="grid-card">
                <div class="image"><i class="mdi mdi-discord"></i></div>
                <div class="name">LightDream#4379</div>
              </a>
              <a class="grid-card" href="https://github.com/L1ghtDream" target="_blank">
                <div class="image"><i class="mdi mdi-github"></i></div>
                <div class="name">GitHub</div>
              </a>
              <a class="grid-card" href="https://linkedin.com/in/L1ghtDream/" target="_blank">
                <div class="image"><i class="mdi mdi-linkedin"></i></div>
                <div class="name">LinkedIn</div>
              </a>
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