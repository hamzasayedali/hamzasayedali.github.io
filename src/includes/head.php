<meta charset="utf-8" />
        <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Hamza Sayed-Ali Portfolio"
    />
    
    <!--
      Notice the use of %PUBLIC_URL% in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="blog.css"/>
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    
    <title><?php echo $PAGE_TITLE ?></title>

    
    </head>
    <body>
      <div class="App">
      <div class='header'>
        <h1><a class="title-link" href="index.html">Hamza Sayed-Ali</a></h1>
        <div class="header-subsection">
          <div class="header-tabs-div">
            <p><a class="social-link" href="index.html">Home</a></p>
            <p><a class="social-link" href="blog.html">Blog</a></p>
          </div>
          
          <div class='social-links'>
            <a class='social-link' target="_blank" href="https://github.com/hamzasayedali" rel="noopener noreferrer"> <img src="github_icon.png" alt="github icon"/> github</a>
            <a class='social-link' target="_blank" href="https://www.linkedin.com/in/hamzasayedali/" rel="noopener noreferrer"> <img src="linkedin_icon.png" alt="linkedin icon"/> linkedin</a>
          </div>

        </div>
        
      </div>
      
      <div class="row">
        <div class="divider-line"></div>
        <div class="leftcolumn">
          <div class="card">
            <h2>Pygame 3D Rendering Engine</h2>
            <h5>How I learned 3D graphics using the Pygame library, Aug 28, 2024</h5>
            <div class="blogimg-center"><img class="blogimg" src="pygame_thumbnail.png"/>
            </div><p>Some text..</p>
          </div>
          <div class="card">
            <h2>Polaris Projector System</h2>
            <h5>The process of designing and building my engineering capstone project, Aug 28, 2024</h5>
            <div class="blogimg-center"><img class="blogimg" src="fydp_thumbnail.png"/>
            </div><p>Some text..</p>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">
            <h2>About Me</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Image</div><br>
            <div class="fakeimg">Image</div><br>
            <div class="fakeimg">Image</div>
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
          </div>
        </div>
      </div>
      
      <div class="footer">
        <p>© 2025</p>
      </div>
    </div>
    </body>
</html>