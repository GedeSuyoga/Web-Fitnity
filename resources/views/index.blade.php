<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>FITNITY</title>
  </head>
  <body>
    <div class="container">
      <aside class="sidebar">
        <div class="logo">
          <img src="img/core-img/logoputihpolos.png" width="72" />
          <a href="#">
            <h2>FITNITY</h2>
          </a>
        </div>

        <div class="tab1">
          <h3>Welcome Sporty People!</h3>
          <div class="tabcontent">
            <a href="/index">  
              <div class="gettab">
                <i class="bx bxs-star"></i>
                <span>Getting Started</span>
              </div>
            </a>
            <a href="/event">
              <div class="eventtab">
                <i class="bx bxs-castle"></i>
                <span>Events</span>
              </div>
            </a>
            <a href="/places">
              <div class="placestab">
                <i class="bx bxs-map"></i>
                <span>Places</span>
              </div>
            </a>
            <a href="/tips">
              <div class="tipstab">
                <i class="bx bxs-key"></i>
                <span>Tips & Tricks</span>
              </div>
            </a>
            <a href="{{route('doLogout')}}">
              <div class="logouttab">
                <i class="bx bx-log-out"></i>
                <span>Logout</span>
              </div>
            </a>
          </div>
          
        </div>
        <div class="tab3">
          <div>
            <a href="#"></a>
          </div>
          
        </div>
      </aside>

      <main>
        <header>
          <div class="search">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search here" />
          </div>

          
        </header>

        <div class="title">
          <h2>Getting Started</h2>
        </div>

        <div class="welcome">
          <h1>
            Welcome, to the Fit Community!, <br>
            What do you want to look first?
          </h1>

        </div>
        <div class="recframe">
          <div class="recframe1">
            <div class="event">
              <div>
                <i class="bx bxs-castle"></i>
                <a href="/event">Events</a>
              </div>
              <p>Participate in sports event near your area!</p>
            </div>
            <div class="tips">
              <div>
                <i class="bx bxs-key"></i>
                <a href="/tips">Tips & Tricks</a>
              </div>
              <p>Find useful sport tips and tricks that will help you.</p>
            </div>
          </div>
          <div class="recframe2">
            <div class="getstarted">
              <div>
                <i class="bx bxs-star"></i>
                <a href="#welcome">Getting started</a>
              </div>
              <p>Learn more about us here!</p>
            </div>
            <div class="places">
              <div>
                <i class="bx bxs-map"></i>
                <a href="/places">Places</a>
              </div>
              <p>Discover places to rent for your event or gatherings.</p>
            </div>
          </div>
        </div>
        
        <section id="welcome">
          <div class="welcome">
            <h1>What is Fitnity? ️</h1>
          </div>
        </section>

        <div class="rules">
          <p>
            In this modern era, awareness of the importance of a healthy and active lifestyle is increasing among the public. However, challenges such as lack of motivation and support to consistently exercise, as well as limited access to relevant information on fitness, are still common. The development of information and communication technology has opened up new opportunities to address these issues, with websites being one of the most effective tools in facilitating interaction and information sharing.
          </p>
          <p>
            Fitnity is a community website platform where users get various features that are useful to help users find information related to sports topics such as sports events or competitions that will be held in the future, in addition to users getting important information, users can rent a field and see tips about sports, it is hoped that this website can be an effective motivator to increase participation in physical activity and build a healthy lifestyle in a sustainable manner.
          </p>
          <h2>The purpose of this website</h2>
          <p>
            This website aims to address the challenges of maintaining a healthy and active lifestyle in society. The main issues faced are lack of motivation and support to consistently exercise and limited access to relevant information on fitness and nutrition. Fitnity offers a solution by providing a platform that allows users to connect with sports communities, gain motivation, and access useful fitness tips and information.
          </p>

        </div>

        <div class="divider"></div>

        
      </main>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Select all clickable divs
          const clickableDivs = document.querySelectorAll('.event, .places, .getstarted, .tips');

          // Add click event listener to each clickable div
          clickableDivs.forEach(function(div) {
              div.addEventListener('click', function() {
                  // Get the anchor tag within the clicked div
                  const anchor = div.querySelector('a');
                  if (anchor) {
                      // Navigate to the href defined in the anchor tag
                      window.location.href = anchor.href;
                  }
              });
          });
      });
  </script>
  </body>
</html>
