<?php
require('access.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>About Page</title>
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/all.css">
  </head>
  <body>
    <div hidden="">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="add-plus-button" viewBox="0 0 357 357"><title>add-plus-button</title><path d="M357,204H204v153h-51V204H0v-51h153V0h51v153h153V204z"/></symbol><symbol id="arrows-1" viewBox="0 0 309.143 309.143"><title>arrows-1</title><path style="fill:#231F20;" d="M240.481,149.268L93.41,2.197c-2.929-2.929-7.678-2.929-10.606,0L68.661,16.34 c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l127.626,127.625L68.661,282.197 c-1.407,1.406-2.197,3.314-2.197,5.303c0,1.989,0.79,3.897,2.197,5.303l14.143,14.143c1.464,1.464,3.384,2.197,5.303,2.197 c1.919,0,3.839-0.732,5.303-2.197l147.071-147.071C243.411,156.946,243.411,152.197,240.481,149.268z"/></symbol><symbol id="arrows-2" viewBox="0 0 309.156 309.156"><title>arrows-2</title><polygon style="fill:#010002;" points="288.461,64.929 154.589,202.766 20.723,64.94 0,85.07 154.589,244.228 309.156,85.07 "/></symbol><symbol id="arrows-3" viewBox="0 0 309.143 309.143"><title>arrows-3</title><path style="fill:#231F20;" d="M112.855,154.571L240.481,26.946c2.929-2.929,2.929-7.678,0-10.606L226.339,2.197 C224.933,0.79,223.025,0,221.036,0c-1.989,0-3.897,0.79-5.303,2.197L68.661,149.268c-2.929,2.929-2.929,7.678,0,10.606 l147.071,147.071c1.406,1.407,3.314,2.197,5.303,2.197c1.989,0,3.897-0.79,5.303-2.197l14.142-14.143 c2.929-2.929,2.929-7.678,0-10.606L112.855,154.571z"/></symbol><symbol id="arrows-4" viewBox="0 0 21.825 21.825"><title>arrows-4</title><path d="M16.791,13.254c0.444-0.444,1.143-0.444,1.587,0c0.429,0.444,0.429,1.143,0,1.587l-6.65,6.651 c-0.206,0.206-0.492,0.333-0.809,0.333c-0.317,0-0.603-0.127-0.81-0.333l-6.65-6.651c-0.444-0.444-0.444-1.143,0-1.587 s1.143-0.444,1.587,0l4.746,4.762V1.111C9.791,0.492,10.299,0,10.918,0c0.619,0,1.111,0.492,1.111,1.111v16.904L16.791,13.254z"/></symbol><symbol id="arrows" viewBox="0 0 238.011 238.011"><title>arrows</title><path style="fill:#090509;" d="M233.387,159.302L130.284,56.231c-3.115-3.115-7.183-4.64-11.283-4.64 c-4.1,0-8.168,1.526-11.283,4.64L4.648,159.302c-6.198,6.198-6.198,16.304,0,22.47c6.198,6.198,16.273,6.198,22.47,0 l91.883-91.883l91.915,91.883c6.166,6.198,16.273,6.198,22.47,0C239.553,175.574,239.553,165.499,233.387,159.302z"/></symbol><symbol id="book" viewBox="0 0 302.657 302.657"><title>book</title><rect x="26.392" y="0" width="36.764" height="302.657"/><path d="M258.007,0H228.57v82.502l-27.33-42.798l-27.328,42.798V0H85.843v302.657h172.164c10.084,0,18.258-8.175,18.258-18.258 V18.258C276.265,8.176,268.091,0,258.007,0z"/></symbol><symbol id="box" viewBox="0 0 612.002 612.002"><title>box</title><path d="M554.197,182.387H411.574v60.723c0,7.517-6.096,13.612-13.608,13.612H214.03c-7.514,0-13.608-6.094-13.608-13.612v-60.723 H57.803c-7.51,0-13.608,6.085-13.608,13.612v386.402c0,7.517,6.098,13.612,13.608,13.612h496.394 c7.51,0,13.606-6.096,13.606-13.612V195.997C567.805,188.47,561.707,182.387,554.197,182.387z"/><path d="M612,131.594c0,7.51-6.085,13.604-13.596,13.604H13.596C6.085,145.198,0,139.105,0,131.594V29.598 c0-7.517,6.085-13.61,13.596-13.61h584.811c7.51,0,13.596,6.094,13.596,13.61v101.996H612z"/></symbol><symbol id="checked" viewBox="0 0 26 26"><title>checked</title><path d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z"/></symbol><symbol id="facebook-logo" viewBox="0 0 90 90"><title>facebook-logo</title><path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998 C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41 h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"/></symbol><symbol id="flash" viewBox="0 0 27.793 27.793"><title>flash</title><polygon points="20.972,0 5.076,15.803 10.972,15.803 6.44,27.793 22.716,11.989 16.819,11.989 "/></symbol><symbol id="linkedin-logo" viewBox="0 0 430.117 430.118"><title>linkedin-logo</title><path id="LinkedIn__x28_alt_x29_" d="M398.355,0H31.782C14.229,0,0.002,13.793,0.002,30.817v368.471 c0,17.025,14.232,30.83,31.78,30.83h366.573c17.549,0,31.76-13.814,31.76-30.83V30.817C430.115,13.798,415.904,0,398.355,0z M130.4,360.038H65.413V165.845H130.4V360.038z M97.913,139.315h-0.437c-21.793,0-35.92-14.904-35.92-33.563 c0-19.035,14.542-33.535,36.767-33.535c22.227,0,35.899,14.496,36.331,33.535C134.654,124.415,120.555,139.315,97.913,139.315z M364.659,360.038h-64.966V256.138c0-26.107-9.413-43.921-32.907-43.921c-17.973,0-28.642,12.018-33.327,23.621 c-1.736,4.144-2.166,9.94-2.166,15.728v108.468h-64.954c0,0,0.85-175.979,0-194.192h64.964v27.531 c8.624-13.229,24.035-32.1,58.534-32.1c42.76,0,74.822,27.739,74.822,87.414V360.038z M230.883,193.99 c0.111-0.182,0.266-0.401,0.42-0.614v0.614H230.883z"/></symbol><symbol id="multiply" viewBox="0 0 32.526 32.526"><title>multiply</title><polygon points="32.526,2.828 29.698,0 16.263,13.435 2.828,0 0,2.828 13.435,16.263 0,29.698 2.828,32.526 16.263,19.091 29.698,32.526 32.526,29.698 19.091,16.263 "/></symbol><symbol id="rhombus" viewBox="0 0 16 16"><title>rhombus</title><path fill="#444444" d="M8 0l-8 8 8 8 8-8-8-8zM2 8l6-6 6 6-6 6-6-6z"/></symbol><symbol id="signs" viewBox="0 0 512 512"><title>signs</title><path d="M444.233,169.659C434.593,72.932,353.671,0,256.011,0C151.677,0,66.798,84.878,66.798,189.212 c0,41.238,12.957,80.324,37.489,113.062l137.876,202.356c3.109,4.609,8.293,7.369,13.847,7.369c5.554,0,10.738-2.76,13.847-7.369 l137.496-201.855C435.929,264.831,449.025,217.55,444.233,169.659z M256.011,272.689c-46.031,0-83.476-37.445-83.476-83.476 s37.444-83.476,83.476-83.476c46.031,0,83.476,37.445,83.476,83.476S302.042,272.689,256.011,272.689z"/></symbol><symbol id="substract" viewBox="0 0 42 42"><title>substract</title><rect y="19" width="42" height="4"/></symbol><symbol id="suneps" viewBox="0 0 192 210.437"><title>suneps</title><path d="M96.6,109.758c-30.793,0-56.357,17.035-56.357-13.758S65.207,40.242,96,40.242c30.797,0,55.758,24.965,55.758,55.758 S127.396,109.758,96.6,109.758L96.6,109.758z M163.18,112L192,96l-28.82-16V112z M28.82,80L0,96l28.82,16V80z M96,0L80,28.82h32 L96,0z M132.191,37.18l22.625,22.629l9.066-31.688L132.191,37.18z M28.117,28.117l9.067,31.692L59.809,37.18L28.117,28.117z"/><g> <g> <defs> <rect id="SVGID_1_" x="60.399" y="130.875" width="71.2" height="79.561"/> </defs> <clipPath id="SVGID_2_"> <use xlink:href="#SVGID_1_" overflow="visible"/> </clipPath> <path clip-path="url(#SVGID_2_)" d="M131.601,171.778l-20.643,0.006v37.842H81.005v-37.848l-20.606,0.006l35.603-40.909 L131.601,171.778z M131.601,171.778"/> </g> </g></symbol><symbol id="twitter-logo-silhouette" viewBox="0 0 612 612"><title>twitter-logo-silhouette</title><path style="fill:#010002;" d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411 c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513 c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101 c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104 c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194 c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485 c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"/></symbol><symbol id="untitled-3" viewBox="0 0 13.862 12.981"><title>untitled-3</title><path d="M11.789,9.192c-0.168-0.169-0.438-0.169-0.606,0l-1.518,1.525L8.146,9.192c-0.168-0.169-0.44-0.169-0.607,0l-1.519,1.525 L4.504,9.192c-0.17-0.169-0.44-0.169-0.608,0l-1.518,1.525L1.467,9.802c-0.335-0.336-0.88-0.336-1.215,0 c-0.336,0.337-0.336,0.883,0,1.222c0.563,0.564,1.702,1.711,1.822,1.831c0.15,0.152,0.44,0.167,0.606,0 c0.166-0.168,1.519-1.525,1.519-1.525l1.518,1.525c0.168,0.168,0.44,0.168,0.608,0l1.517-1.525c0,0,1.367,1.372,1.519,1.525 c0.151,0.152,0.441,0.167,0.607,0c0.166-0.168,1.519-1.525,1.519-1.525l0.91,0.914c0.335,0.338,0.879,0.338,1.216,0 c0.333-0.338,0.333-0.885,0-1.22C12.98,10.39,11.789,9.192,11.789,9.192z"/><path d="M11.789,4.661c-0.168-0.17-0.438-0.17-0.606,0L9.665,6.185L8.146,4.661c-0.168-0.17-0.44-0.17-0.607,0L6.021,6.185 L4.504,4.661c-0.17-0.17-0.44-0.17-0.608,0L2.378,6.185L1.467,5.269c-0.335-0.336-0.88-0.336-1.215,0 c-0.336,0.34-0.336,0.885,0,1.223c0.563,0.567,1.702,1.712,1.822,1.832c0.15,0.151,0.44,0.168,0.606,0 c0.166-0.167,1.519-1.526,1.519-1.526l1.518,1.526c0.168,0.169,0.44,0.169,0.608,0l1.517-1.526c0,0,1.367,1.373,1.519,1.526 c0.151,0.151,0.441,0.168,0.607,0c0.166-0.167,1.519-1.526,1.519-1.526l0.91,0.915c0.335,0.338,0.879,0.338,1.216,0 c0.333-0.336,0.333-0.883,0-1.221C12.98,5.857,11.789,4.661,11.789,4.661z"/><path d="M2.074,3.789c0.15,0.153,0.44,0.167,0.606,0c0.166-0.166,1.519-1.525,1.519-1.525l1.518,1.525 c0.168,0.169,0.44,0.169,0.608,0l1.517-1.525c0,0,1.367,1.373,1.519,1.525c0.151,0.153,0.441,0.167,0.607,0 c0.166-0.166,1.519-1.525,1.519-1.525l0.91,0.916c0.335,0.337,0.879,0.337,1.216,0c0.333-0.337,0.333-0.885,0-1.221 c-0.632-0.635-1.823-1.832-1.823-1.832c-0.168-0.169-0.438-0.169-0.606,0L9.665,1.654L8.146,0.126c-0.168-0.169-0.44-0.169-0.607,0 L6.021,1.654L4.504,0.126c-0.17-0.169-0.44-0.169-0.608,0L2.378,1.654L1.467,0.737c-0.335-0.337-0.88-0.337-1.215,0 c-0.336,0.338-0.336,0.885,0,1.222C0.815,2.524,1.954,3.67,2.074,3.789z"/></symbol><symbol id="untitled-5" viewBox="0 0 13.866 13.893"><title>untitled-5</title><path d="M1.269,9.146c-1.692-1.695-1.692-4.444,0-6.139L4.333,0l3.064,3.008c1.692,1.694,1.692,4.443,0,6.139 C5.704,10.844,2.96,10.844,1.269,9.146z M7.366,5.645c-0.24,0-0.433,0.191-0.433,0.434c0,1.437-1.165,2.604-2.6,2.604 c-0.24,0-0.433,0.194-0.433,0.435c0,0.238,0.193,0.434,0.433,0.434c1.915,0,3.467-1.555,3.467-3.473 C7.8,5.836,7.605,5.645,7.366,5.645z"/><path d="M13.105,13.13c-1.016,1.017-2.661,1.017-3.677,0c-1.016-1.019-1.016-2.667,0-3.685l1.839-1.842l1.838,1.842 C14.121,10.463,14.121,12.111,13.105,13.13z M12.566,10.853c-0.24,0-0.434,0.194-0.434,0.435c0,0.479-0.387,0.868-0.865,0.868 c-0.241,0-0.434,0.193-0.434,0.435c0,0.239,0.192,0.435,0.434,0.435c0.955,0,1.732-0.778,1.732-1.737 C13,11.047,12.805,10.853,12.566,10.853z"/></symbol></svg>
    </div>
    <header>
      <a href="index.html" class="logo animated"></a>
      <span class="logo-text animated"></span>
      <nav class="mob-hide">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="active"><a href="about.html">ABOUT US</a></li>
          <li><a href="brands.html">BRANDS</a></li>
          <li><a href="community.html">COMMUNITY</a></li>
          <li><a href="sustainability.html">SUSTAINABILITY</a></li>
          <li><a href="careers.html">CAREERS</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </nav>
      <span class="burger js-menu-trigger">
				<i></i>
				<i></i>
				<i></i>
				<i></i>
				<i></i>
				<i></i>
			</span>
      <div class="clearfix"></div>
    </header>
    <div class="about">
      <section class="about__story">
        <div class="container">
          <div class="about__story-inner">
            <h1>Our story</h1>
            <div class="img-block" style="background-image:url(images/story_1.jpg)">
            </div>
            <div class="img-block" style="background-image:url(images/story_2.jpg)">
            </div>
            <div class="img-block" style="background-image:url(images/story_3.jpg)">
            </div>
            <div class="img-block" style="background-image:url(images/story_4.jpg)">
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="home__welcome">
          <div class="container">
            <div class="pseudo-title">OVERVIEW</div>
            <h4>We manufacture Canada’s most popular tissue brands</h4>
            <p>Great things can happen when people work passionately towards a common goal. That’s how Kruger Products grew to become Canada’s leading manufacturer of quality tissue products for household, industrial, and commercial use.</p>
          </div>
        </div>
      </section>
      <section class="about__names full-height">
        <div class="col">
          <div class="vertical-align">
            <div class="pseudo-title">CONSUMER PRODUCTS – CANADA</div>
            <h4>A family of Canadian household names</h4>
            <p>There’s a high Kruger Products tissue brand for every room in your home.</p>
          </div>
        </div>
        <div class="col">
          <div class="row" style="background-image: url(images/names_bg_1.jpg)">
            <img src="images/names_bg_2.png" alt="">
            <h6>Canada’s #1 <br> bathroom tissue</h6>
          </div>
          <div class="row" style="background-image: url(images/names_bg_2.jpg)">
            <img src="images/names_bg_1.png" alt="">
            <h6> Canada’s #2 <br> PAPER TOWELS</h6>
          </div>
          <div class="row" style="background-image: url(images/names_bg_4.jpg)">
            <img src="images/names_bg_4.png" alt="">
            <h6>Canada’s #1 <br> facial tissue</h6>
          </div>
          <div class="row" style="background-image: url(images/names_bg_3.jpg)">
            <img src="images/names_bg_3.png" alt="">
            <h6>Western Canada’s #1 <br> bathroom tissue</h6>
          </div>
          <div class="row" style="background-image: url(images/names_bg_6.jpg)">
            <img src="images/names_bg_5.png" alt="">
            <h6>Canada’s first premium tissue products MADE FROM 100% recycled paper</h6>
          </div>
          <div class="row" style="background-image: url(images/names_bg_5.jpg)">
            <img src="images/names_bg_6.png" alt="">
            <h6>Canada’s #1 <br> paper napkin</h6>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </section>
      <section class="about__consumer full-height">
        <div class="container">
          <div class="vertical-align">
            <div class="white-cloud">
              <img class="vertical-align" src="images/white_cloud.png" alt="">
            </div>
            <div class="text">
              <div class="pseudo-title">CONSUMER PRODUCTS – US AND MEXICO</div>
              <h4>Ranked #1 by a leading consumer ratings  publication</h4>
              <p>White Cloud® bathroom tissue, facial tissue, and paper towels are manufactured primarily at our plant in Memphis, TN. White Cloud bathroom tissue was recently recognized as the best bathroom tissue in America by a leading consumer ratings publication. Kruger Products also produces branded and private label bathroom tissue, facial tissue, and paper napkins for consumers to use at home in the United States and Mexico.ratings publication.</p>
              <p>Kruger Products also produces branded and private label bathroom tissue, facial tissue, and paper napkins for consumers to use at home in the United States and Mexico.ratings publication.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="about__dark full-height">
        <div class="container">
          <div class="vertical-align">
            <div class="pseudo-title">AWAY FROM HOME DIVISION</div>
            <h4>Canada’s leading commercial tissue manufacturer</h4>
            <p>Our Away From Home division offers high-quality, cost-effective products — bathroom tissue, facial tissue, paper towels, paper napkins, wipers, hand care, and dispensing systems — for use in the food service, property management, healthcare, manufacturing, education, and lodging segments across North America.</p>
          </div>
          <div class="away-obj"></div>
        </div>
      </section>
      <section class="about__ceo full-height">
        <div class="vertical-align">
          <div class="container">
            <div class="quotes">
              <img src="images/man-portrait.jpg" alt="Mario Gosselin, CEO">
              <i>”</i><h3>At the core of our success is the skill and dedication of our people.</h3><i>“</i>
              <div class="pseudo-title">Mario Gosselin, CEO</div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="about__locations">
        <div class="container">
          <div class="text">
            <div class="pseudo-title">our locations</div>
            <h4>Find us across North America</h4>
            <p>Our locations are strategically aligned to the natural resources we use to make our products, and to key population centres that represent 90% of Canadian and 60% of U.S. consumers. Our total papermaking capacity is just over one-third of Canada’s total installed tissue manufacturing capacity. </p>
            <p>We employ 2,500 people in 8 manufacturing plants located across North America from our Mississauga, Ontario headquarters. Everywhere we operate, we invest in our communities and the environment through sustainability initiatives and philanthropy.</p>
          </div>
          <div class="locations-wrap">
            <div class="location">
              <div class="pseudo-title red">Papermaking & converting</div>
              <h5>New Westminster, British Columbia</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title red">Papermaking & converting</div>
              <h5>New Westminster, British Columbia</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title red">Papermaking & converting</div>
              <h5>Gatineau, Quebec</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title">Papermaking</div>
              <h5>Sherbrooke, Quebec</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title green">CORPORATE HEADQUARTERS</div>
              <h5>Mississauga, Ontario</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title purple">Converting</div>
              <h5>Scarborough, Ontario</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title purple">Converting</div>
              <h5>Trenton, Ontari</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="location">
              <div class="pseudo-title red">Papermaking & converting</div>
              <h5>Memphis, Tennessee</h5>
              <a href="javascript:void(0)" class="btn pseudo-title">FACT SHEET
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-3"></use>
                </svg>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="about__focus full-height">
        <div class="container">
          <div class="text">
            <h2>What We Stand For</h2>
            <div class="slogan">Our Focus: Everything we do revolves around our customers and consumers.</div>
          </div>
          <img src="images/cone_opened.png" alt="cone">
          <div class="col-c">
            <div class="col">
              <h5>Courage</h5>
              <p>Our policy to conduct business ethically and in conformance with applicable laws, rules, and regulations of all countries in which we do business. </p>
            </div>
            <div class="col">
              <h5>Dedication</h5>
              <p>Our policy to conduct business ethically and in conformance with applicable laws, rules, and regulations of all countries in which we do business. </p>
            </div>
            <div class="col">
              <h5>Excellence</h5>
              <p>Our policy to conduct business ethically and in conformance with applicable laws, rules, and regulations of all countries in which we do business. </p>
            </div>
            <div class="col">
              <h5>Integrity</h5>
              <p>Our policy to conduct business ethically and in conformance with applicable laws, rules, and regulations of all countries in which we do business. </p>
            </div>
            <div class="col">
              <h5>Teamwork</h5>
              <p>Our policy to conduct business ethically and in conformance with applicable laws, rules, and regulations of all countries in which we do business. </p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="about__history full-height">
        <div class="triangles"></div>
        <div class="container">
          <div class="pseudo-title">OUR HISTORY</div>
          <h4>Over a century of success</h4>
          <div class="swiper-container timeline-top">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1941</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1942</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1943</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1944</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1945</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1946</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1947</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1948</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="thumb"></div>
                  <div class="pseudo-title year">1949</div>
                  <h5>Kruger Products ranked #1 Canadian packaged goods supplier by retailers for fourth consecutive year</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-container timeline-bottom">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><span class="pseudo-title">1941</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1942</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1943</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1944</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1945</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1946</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1947</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1948</span></div>
                <div class="swiper-slide"><span class="pseudo-title">1949</span></div>
              </div>
          </div>
          <div class="swiper-button-next swiper-button-black"></div>
          <div class="swiper-button-prev swiper-button-black"></div>
        </div>
      </section>
      <section class="about__ethical full-height">
        <div class="vertical-align">
          <div class="about__ethical-inner">
            <h2>Fair and Ethical Business</h2>
            <p>Our policy to conduct business ethically and in conformance with applicable laws, rules, and regulations of all countries in which we do business. </p>
            <a href="#" class="btn pseudo-title">Read code of conduct</a>
          </div>
        </div>
      </section>
      <section class="about__organization">
        <div class="pseudo-title">CORPORATE STRUCTURE</div>
        <h4>Our Organization</h4>
        <p>The organizational chart illustrates the relationship between Kruger Products L.P. and its shareholders. KP Tissue Inc. is a publicly traded entity created to acquire, and its business is limited to holding a limited partnership interest in Kruger Products L.P. (KPLP). KP Tissue Inc. trades on the Toronto Stock Exchange under the symbol KPT.</p>
        <div class="about__organization-scheme">
          <div class="container">
              <div class="rings-wrap">
                <span class="ring"></span>
                <h6>Public Investors</h6>
              </div>
              <div class="jumper">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-1"></use>
                </svg>
                100%
              </div>
              <div class="rings-wrap">
                <span class="ring"></span>
                <h6>KP Tissue Inc.</h6>
                <span>Canada</span>
              </div>
              <div class="jumper">
                <svg class="icon">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-1"></use>
                </svg>
                15.7%
              </div>
            <div class="circle">
              <div class="vertical-align">
                <h5>Kruger Products L.P.</h5>
                <span>Québec</span>
              </div>
            </div>
            <div class="jumper">
              <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-2"></use>
              </svg>
              <0.01%
            </div>
            <div class="rings-wrap">
              <span class="ring"></span>
              <h6>KPGP Inc.</h6>
              <span>Canada</span>
            </div>
            <div class="jumper">
              <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-2"></use>
              </svg>
              100%
            </div>
            <div class="rings-wrap">
              <span class="ring"></span>
              <h6>Kruger Inc.</h6>
            </div>
            <div class="over-jumper jumper">
              <svg class="icon">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrows-2"></use>
              </svg>
              <span>83%</span>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- <svg version="1.1" class="ring" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="101.559px" height="101.176px" viewBox="0 0 101.559 101.176" enable-background="new 0 0 101.559 101.176" xml:space="preserve">
            <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#00a453" stroke-width="7" stroke-miterlimit="10" d="M50.779,3.5c26.111,0,47.279,21.082,47.279,47.088S76.891,97.676,50.779,97.676S3.5,76.594,3.5,50.588S24.668,3.5,50.779,3.5z"/>
        </svg> -->

      </section>
      <section class="about__highlights">
        <div class="container">
          <div class="pseudo-title">PEAK PERFORMANCE</div>
          <h4>Recognition Highlights</h4>
          <div class="swiper-container timeline-left">
              <div class="swiper-wrapper">
                <div class="swiper-slide pseudo-title">1941</div>
                <div class="swiper-slide pseudo-title">1942</div>
                <div class="swiper-slide pseudo-title">1943</div>
                <div class="swiper-slide pseudo-title">1944</div>
                <div class="swiper-slide pseudo-title">1945</div>
                <div class="swiper-slide pseudo-title">1946</div>
                <div class="swiper-slide pseudo-title">1947</div>
                <div class="swiper-slide pseudo-title">1948</div>
                <div class="swiper-slide pseudo-title">1949</div>
              </div>
          </div>
          <div class="swiper-container timeline-right">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
                <div class="block">
                  <div class="pseudo-title">corporate</div>
                  <h5>Canadian Grocery’s STAR Women of Grocery, Lucie Martin, Corporate Director, Talent Management</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
    </div>

    <div class="showbox animated">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
      </div>
    </div>

    <script src="js/all.js"></script>

  </body>
</html>
