

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<?php
  $page_title = "About Me - Amin Fatemi";
  $page_description = "Amin Fatemi - I am a web developer specialised in both frontend and backend web development. I have a dual degree bachelors of science 
  in Computer Science Engineering and Geoscience Engineering. For my graduate studies I was more focused on Computational Geoscience Engineering and graduated as a PhD from TUDelft, Netherlands.
  I always had the passion to get on the IT train and kept track of the-state-of-the-art in the industry. After my PhD I shifted my focus to the IT world and 
  developed a number of projects in front and back web development. I am currently eager to start a new career as a developer. I see myself as a successful entrepreneur in a few years.
  See 'my skills' and 'portfolio' to read more of my current skill set and projects.";
  $Page_url = "www.aminfatemi.nl/about.php";
  ?>
  <?php include("inc/header.php"); ?>

  <body class="parent-about-me">
  <?php include("inc/sidenav.html");?>

    <div class="site-main">
      <div class="site-main-inner">
        <div class="main-section">
          <h1 class="main-title">A few words about me</h1>

         
           <p>I currently live in the beautiful city of Delft where I started my PhD in 2011. After finishing my PhD in 2016, I followed my passion of development. I have designed, developed, launched and maintained front to back of <a href="https://www.github.com/aminfatemi"><i>several projects</i></a> from scratch.</p>
          <p> I spend my free time with a ton of hobbies including and not limited to:</p>
            <ul>
              <li>cycling, specially in the summer</li>
              <li>swimming and water sports</li>
              <li>wood working</li>
              <li>photography</li>               
            </ul>
            <hr>

          <p>
            If you are lookigng for more details on my skills, check out:<br> <strong><a href="skills.php">My Skills</a></strong> or <strong><a href="portfolio.php">My Portfolio</a> </strong>.
          </p>

          <div style="margin:0">
            <img src="img/me3.jpg" style="max-width: 100%" />
          </div>
        </div>
      </div>
    </div>

    <?php include("inc/footer.html");?>

  </body>
</html>
