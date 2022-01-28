<?php 
 $page = 'degrees';
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LightDream | Degrees</title>
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
        <div class="spacer"></div>
        <div class="section degrees bg">
          <div class="container">
            <div class="pageTitle sm" data-aos="fade" data-aos-duration="1000">Bachelors</div>
            <div class="grid" data-aos="fade" data-aos-duration="1000">
              <!-- Spaciator -->
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="height: 0px; padding: 0px; border: 0px"></div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/MicroBachelors.png"></div>
                <div class="name">Programming & Data Structures</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/MicroBachelors.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (100%) <br> 
                  Degree ID: <strong><a href=https://credentials.edx.org/credentials/95d403a687db40beaefccf8a0b771320 style="color: #39c7f1; text-decoration: none" target="_balnk">95d403a687db40beaefccf8a0b771320</a></strong> <br> 
                </div>
              </div>
            </div>

            <br><br><br>

            <div class="pageTitle sm" data-aos="fade" data-aos-duration="1000">Degrees</div>
            <div class="grid" data-aos="fade" data-aos-duration="1000">
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/cs50_edx_2.png"></div>
                <div class="name">CS50 EDX</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/cs50_edx_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (94%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/34208bd0bf6148fd917003380e3b8f7c style="color: #39c7f1; text-decoration: none" target="_balnk">34208bd0bf6148fd917003380e3b8f7c</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/cs50_harvard_2.png"></div>
                <div class="name">CS50 Harvard</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/cs50_harvard_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://cs50.harvard.edu style="color: #39c7f1; text-decoration: none" target="_balnk">Harvard</a></strong> <br>
                  Grade: Passing Grade (100%) <br> 
                  Degree ID: <strong><a href=https://certificates.cs50.io/04acc3d1-53ea-4395-b8f2-6f1f67a9f720.pdf style="color: #39c7f1; text-decoration: none" target="_balnk">04acc3d1-53ea-4395-b8f2-6f1f67a9f720</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/osepi_special_judet_2.png"></div>
                <div class="name">OSEPI 2021 - Special Distinction</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/osepi_special_judet_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=http://srsi.ro/ style="color: #39c7f1; text-decoration: none">OSEPI</a></strong> <br>
                  Award: Special Distinction (32%) <br> 
                  Stage: District <br>
                  Award ID: PH_10_2618 <br>   
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/empowersoft_mention_national_2.png"></div>
                <div class="name">EmpowerSoft 2021 - Mention</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/empowersoft_mention_national_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://empowersoft.ro style="color: #39c7f1; text-decoration: none">EmpowerSoft</a></strong> <br>
                  Award: Mention (51%) <br>
                  Stage: National <br>
                  Award ID: <strong><a href=https://empowersoft.ro/concurs/diplome/sectiunea5/Diploma_PM_P-E160.pdf style="color: #39c7f1; text-decoration: none" target="_balnk">E160</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/phi_mentiune_nationala_2.png"></div>
                <div class="name">Phi 2020 - National Stage</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/phi_mentiune_nationala_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=http://stoner.phys.uaic.ro/phi.html style="color: #39c7f1; text-decoration: none">Phi</a></strong> <br>
                  Award: Mention <br>
                  Stage: National
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/olimpiada_info_mentiune_judet_2.png"></div>
                <div class="name">Computer Science Olympics 2020 - District Stage</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/olimpiada_info_mentiune_judet_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><span style="color: #39c7f1; text-decoration: none">Romania's National Organization</span></strong> <br>
                  Award: Mention <br>
                  Stage: District
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/CPP.PRG.1%20NYU_2.png"></div>
                <div class="name">NYU - Introduction to Programming in C++</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/CPP.PRG.1%20NYU_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (100%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/74ca9df1ce4540db93a8359369a43d21 style="color: #39c7f1; text-decoration: none" target="_balnk">74ca9df1ce4540db93a8359369a43d21</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/CPP.PRG.2NYU_2.png"></div>
                <div class="name">NYU - Advanced Programming in C++</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/CPP.PRG.2NYU_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (100%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/8033b3bbcc724b31a580e79aac1ee9ff style="color: #39c7f1; text-decoration: none" target="_balnk">8033b3bbcc724b31a580e79aac1ee9ff</a></strong> <br> 
                </div>
              </div>

              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/MIT.Python_2.png"></div>
                <div class="name">MIT- Introduction to Computer Science and Programming Using Python</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/MIT.Python_2.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (99%-Mid Term / 95%-Final) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/06f748bc56384c528513cc28ecbb6f17 style="color: #39c7f1; text-decoration: none" target="_balnk">06f748bc56384c528513cc28ecbb6f17</a></strong> <br> 
                </div>
              </div>

              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/gcp_google_cloud_essentials.png"></div>
                <div class="name">GCP - Google Cloud Essentials</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/gcp_google_cloud_essentials.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://www.cloudskillsboost.google style="color: #39c7f1; text-decoration: none" target="_balnk">Google Cloud Skill Boost</a></strong> <br>
                  Grade: Passing (100%) <br> 
                  Profile ID: <strong><a href=https://www.cloudskillsboost.google/public_profiles/643253f9-e7a4-4ded-88f5-6f3741419919 style="color: #39c7f1; text-decoration: none" target="_balnk">643253f9-e7a4-4ded-88f5-6f3741419919</a></strong> <br> 
                  Degree ID: <strong><a href=https://www.cloudskillsboost.google/public_profiles/643253f9-e7a4-4ded-88f5-6f3741419919/badges/1575699 style="color: #39c7f1; text-decoration: none" target="_balnk">1575699</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/CPP.PRG.3.png"></div>
                <div class="name">NYU - Introduction to Data Structures</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/CPP.PRG.3.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (100%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/835446a1852d4674ae5323fb9db57577 style="color: #39c7f1; text-decoration: none" target="_balnk">835446a1852d4674ae5323fb9db57577</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/CPP.PRG.4.png"></div>
                <div class="name">NYU - Advenced Data Structures</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/CPP.PRG.4.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (100%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/a29e65562f7345fca58254a1a50be695 style="color: #39c7f1; text-decoration: none" target="_balnk">a29e65562f7345fca58254a1a50be695</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/LFS101x.png"></div>
                <div class="name">The Linux Fundation - Introduction to Linux</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/LFS101x.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (95%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/60f3b8d3054a43e9b4670474eda3e61d style="color: #39c7f1; text-decoration: none" target="_balnk">60f3b8d3054a43e9b4670474eda3e61d</a></strong> <br> 
                </div>
              </div>
              <div class="grid-card toggle-degree" data-toggle="modal" data-target="#degreeModal" style="min-height: 200px">
                <div class="image"><img src="/assets/images/degrees/CS1331xI.png"></div>
                <div class="name">Georgia Tech - Introduction to Object-Oriented Programming with Java I</div>
                <div class="text d-none">
                  <img src="/assets/images/degrees/CS1331xI.png" style="width: min(755px, 100%); height: auto;">
                  <br><br>
                  Platform: <strong><a href=https://edx.org style="color: #39c7f1; text-decoration: none" target="_balnk">EDX</a></strong> <br>
                  Grade: Passing Grade (93%) <br> 
                  Degree ID: <strong><a href=https://courses.edx.org/certificates/9f80f8ae0fcf47e295448d25b4ebf8e4 style="color: #39c7f1; text-decoration: none" target="_balnk">9f80f8ae0fcf47e295448d25b4ebf8e4</a></strong> <br> 
                </div>
              </div>
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
