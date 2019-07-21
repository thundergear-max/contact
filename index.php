<html>
        <head>
           <meta charset="utf-8">
            <title>Contact Us</title>
            <link rel="icon" href="2.jpg" type="image/gif" sizes="16x16">
            <link rel="stylesheet" href="style2.css">
    <style media="screen">
      .loader{
                  position: fixed;
                  z-index: 99;
                  top: 0;
                  left: 0;
                  width: 100%;
                  height: 100%;
                  background-color: #2980b9;
                  display: flex;
                  justify-content: center;
                  align-items: center;
              }

              .loader.hidden{
                animation: fadeOut 1s;
                animation-fill-mode: forwards;
              }

              @keyframes fadeOut{
                  100% {
                    opacity: 100%;
                    visibility: hidden;
                  }

              }
              </style>
  </head>
  <body>
    <div class="loader">
            <img src="loading.gif.gif" alt="Loading..."/>
          </div>
          <div class="side">
                <a href="offical.html" style="background:#27ae60;">Home</a>
                <a href="busineescard.html" style="background:#c0392b;">Business Card</a>
                <a href="social.html" style="background:#2c3e50;">Social Media</a>
                <a href="newsletter.html" style="background:#2980b9;">Join Us</a>
            </div>
                     <div class="contact-section">
                       <h1>Contact Us</h1>
                       <div class="border"></div>
                       <form class="contact-form" action="contactform.php" >
                          <input type="text" class="contact-form-text" placeholder="Your name">
                          <input type="email" class="contact-form-text" placeholder="Your email">
                          <input type="text" class="contact-form-text" placeholder="Your phone">
                       <textarea class="contact-form-text" placeholder="Your message"></textarea>
                       <button type="submit" class="contact-form-btn" name="submit">Send</button>
                       </form>
                     </div>
     <script type="text/javascript">
       window.addEventListener("load", function() {
         const loader = document.querySelector(".loader");
         loader.className +=  " hidden"; //class:"loader hidden"
       });
     </script>
  </body>
</html>
