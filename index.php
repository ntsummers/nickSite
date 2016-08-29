<!DOCTYPE html>
<html lang="en-us">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Welcome!</title>
  <meta name="description" content="Nicholas Summers' Personal Website">
  <meta name="author" content="Nicholas Summers">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png" />

  <!-- jQuery
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav class="navbar">
        <ul class="navbar-list">
            <li class="header-image"><img src="images/favicon.png" alt="Nicholas Summers Icon" class="navbar-image">
                <h1 class="header-text">Nicholas Summers</h1>
            </li>

            <input type="checkbox" id="nav-trigger" class="nav-trigger" />
            <label for="nav-trigger"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></label>

            <div class="navbar-list-container">
                <li class="navbar-item"><a onclick="closeNav()" href="#About"      class="navbar-link">About</a></li>
                <li class="navbar-item"><a onclick="closeNav()" href="#Projects"   class="navbar-link">Projects</a></li>
                <li class="navbar-item"><a onclick="closeNav()" href="#Experience" class="navbar-link">Experience</a></li>
                <li class="navbar-item"><a onclick="closeNav()" href="#Education"  class="navbar-link">Education</a></li>
                <li class="navbar-item"><a onclick="closeNav()" href="#Contact"    class="navbar-link">Contact</a></li>
            </div>
        </ul>
    </nav>

    <main class="main-body">

        <span class="main-anchor" id="About"></span>
        <section class="main-sections blue">

            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <h3 class="about-header"> About Me </h3>
                    </div>
                </div>
                <div class="about-image-container">
                    <img src="images/NicholasSummers.png" alt="Nicholas Summers" class="about-image">
                </div>

                <div class="about-chat">
                    <div class="bubble me">I am a hard working, detail oriented, soon to be graduate who is seeking a challenging position to utilize my experience and education. I am looking to leverage my diverse experience as a full-stack developer and project manager to take on ever expanding roles.</div>
                </div>
            </div>

        </section>


        <span class="main-anchor" id="Projects"></span>
        <section class="main-sections white">

            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <h3 class="project-header"> Projects </h3>
                    </div>
                </div>

                <div class="row project-row">
                    <div class="six columns">
                        <div class="project-image-container">
                            <img class="project-image project-search" src="images/search.msu.edu.png" alt="Michigan State University Search Site">
                            <div class="project-image-overlay"><a href="//search.msu.edu"><div class="project-link">MSU Search</div></a></div>
                        </div>
                    </div>
                    <div class="six columns">
                        <div class="project-image-container">
                            <img class="project-image project-maps" src="images/maps.msu.edu.png" alt="Michigan State University Maps Site">
                            <div class="project-image-overlay"><a href="//search.msu.edu"><div class="project-link">MSU Maps Portal Page</div></a></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="six columns offset-by-three">
                        <div class="project-image-container">
                            <img class="project-image project-maps-interactive" src="images/maps.msu.edu:interactive.png" alt="Michigan State University Interactive Maps Site">
                            <div class="project-image-overlay"><a href="//maps.msu.edu/interactive"><div class="project-link"> MSU Interactive Map</div></a></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <span class="main-anchor" id="Experience"></span>
        <section class="main-sections light-grey">

            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <h3 class="experience-header"> Experience </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <h4 class="experience-job-title"> Student Programmer </h4>
                        <h5 class="experience-job-location"> Michigan State University: IT Services Content and Collaboration </h5>
                        <h6 class="experience-job-time">January 2014 - Present</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <p class="experience-job-description">Create, manage, and update high-visibility MSU websites with exten- sive use of full-stack development. Optimize sites for SEO, introduce responsive design, and hold sites to AA accessibility compliance. Extensive use of Google Maps API, Google Analytics, and MSU API’s.</p>
                        <p class="experience-job-achievement-header"> Achievements: </p>
                        <ul class="experience-job-achievement-list">
                            <li>Worked on MSU Search Services which consist of 5 web properties averaging over 400,000 sessions per month.</li>
                            <li>Completely rewrote and redesigned Maps.msu.edu from the ground up</li>
                        </ul>
                    </div>
                </div>
                <div class="experience-job-border"></div>
                <div class="row">
                    <div class="twelve columns">
                        <h4 class="experience-job-title"> IT Intern </h4>
                        <h5 class="experience-job-location"> Kellogg </h5>
                        <h6 class="experience-job-time">May 2015 - August 2015</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <p class="experience-job-description">Project manager and led teams to success on multiple projects such as the creation of an API to be used by Kellogg’s IT team. Introduced gami cation to increase customer service among the global employee help desks. Created wireframes, empathy maps, and personas to increase usability of current Kellogg websites. Taught and presented to 40 8th grade middle school students on thermodynamics.</p>
                        <p class="experience-job-achievement-header"> Achievements: </p>
                        <ul class="experience-job-achievement-list">
                            <li>Oversaw, designed and created an API to help transition Kellogg’s servers to Amazon Web Services.</li>
                            <li>Designed wireframes for Kellogg’s internal global employee website that was approved by the CIO.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <span class="main-anchor" id="Education"></span>
        <section class="main-sections near-black">

            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <h3 class="education-header"> Education </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="six columns">
                        <h5 class="education-title">Michigan State University</h5>
                        <p class="education-address">426 Auditorium Rd., East Lansing, MI 48824</p>
                        <ul class="education-list">
                            <li class="education-list-elements">3.1 GPA</li>
                            <li class="education-list-elements">Computer Science Major (BS)</li>
                            <li class="education-list-elements">Media and Information Major (BS)</li>
                            <li class="education-list-elements">Graduating May, 2017</li>
                        </ul>
                    </div>
                    <div class="six columns">
                        <h5 class="education-title">Saline High School</h5>
                        <p class="education-address">1300 Campus Pkwy., Saline, MI 48176</p>
                        <ul class="education-list">
                            <li class="education-list-elements">3.55 GPA</li>
                            <li class="education-list-elements">Graduated May, 2012</li>
                            <li class="education-list-elements">Rugby, Bowling, Varsity Track and Field, Soccer, Crew.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <span class="main-anchor" id="Contact"></span>
        <section id="Contact" class="main-sections">
            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <h3 class="contact-header"> Contact Me! </h3>
                    </div>
                </div>
                <form id="#mail-form" class="contact-form" action="index.php" method="POST" enctype="text/plain" onsubmit="{return false;}">
                    <div class="row">
                        <div class="six columns">
                            <label for="EmailInput">Your email</label>
                            <input name="EmailInput" class="u-full-width" type="email" placeholder="yourEmail@mailbox.com" id="EmailInput">
                        </div>
                        <div class="six columns">
                            <label for="ReasonInput">Reason for contacting</label>
                            <select name="ReasonInput" class="u-full-width" id="ReasonInput">
                                <option value="Questions">Questions</option>
                                <option value="Comments">Comments</option>
                                <option value="Requests">Requests</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <label for="Message">Message</label>
                        <textarea name="Message" class="u-full-width" placeholder="Hi Nick!" id="Message"></textarea>
                    </label>

                    <input class="contact-form-primary button-primary" name="submit" type="submit" value="Submit">
                    <div id="contact-form-response" class="contact-form-response">
                        <i id="contact-form-response-cog" class="fa fa-3x fa-cog fa-spin contact-form-response-cog" aria-hidden="true"></i>
                        <div id="contact-form-response-success" class="contact-form-response-success"><p>Success</p>
                        <button id="contact-form-response-button" class="contact-form-response-button" onclick="reopenForm()">Forgot something? Send me another email!</button></div>
                    </div>
                </form>
            </div>

        </section>

    </main>

    <footer class="footer-container">
        <div class="container">
            <div class="row">
                <div class="twelve columns">
                    <p class="footer-createdby">Created by Nicholas Summers 2016 using <a href="//getskeleton.com/">Skeleton Boilerplate</a>, <a href="//bower.io/">Bower</a>, <a href="http://gruntjs.com/">Grunt</a>, and <a href="//sass-lang.com/">Sass</a>.</p>
                    <p class="footer-addendum">Want to dig into the code? You can find me and the associated repo on <a href='https://github.com/ntsummers/nickSite'>Github</a>! </p>
                </div>
            </div>
        </div>
    </footer>

    <script>

        var formResponse = document.getElementById("contact-form-response");
        var formCog      = document.getElementById("contact-form-response-cog");
        var formSuccess  = document.getElementById("contact-form-response-success");
        var formButton   = document.getElementById("contact-form-response-button");

        //This function allows for the contact form to submit and send mail without
        //reloading the page! :D
        $(document).ready(function() {
            $("form").submit(function() {

                formResponse.style.display = "block";
                formResponse.style.opacity = "1";
                formCog.style.display = "block";
                formCog.style.opacity = "1";


                $.ajax({
                    type: "POST",
                    url: "php/mail.php",
                    data: $(this).serialize(),
                    success: function() {
                        formCog.style.opacity = "0";
                        setTimeout(function() {
                            formCog.style.display = "none";
                        }, 600)

                        formSuccess.style.display = "block";
                        formSuccess.style.opacity = "1";

                        formButton.style.display  = "block";
                        formButton.style.opacity  = "1";

                    }
                });
            });
        });

        //After sending an email, this function allows the user to send another incase they forgot something!
        function reopenForm() {
            formSuccess.style.opacity  = "0";
            formResponse.style.opacity = "0";
            formButton.style.opacity   = "0";

            setTimeout(function() {
                formSuccess.style.display  = "none";
                formResponse.style.display = "none";
                formButton.style.display   = "none";
            }, 600)
        }

        //This function closes the navigation for mobile users when clicking a link.
        function closeNav() {
            document.getElementById("nav-trigger").checked = false;
        }

        //Sets up google analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-83196357-1', 'auto');
        ga('send', 'pageview');
    </script>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
