

<!DOCTYPE html>
<html>
  <head>
    <title>Thank you for your registration</title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  </head>
  <style>
 body {
  background-image: url(image.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 5px;
}

  
  #thank-you-box {
    background-color: #fff; /* set the background color to white */
    border: 1px solid #ccc; /* add a 1px gray border */
    padding: 20px; /* add some padding around the box */
    max-width: 600px; /* limit the box width */
    margin: 50px auto; /* center the box horizontally and add some top margin */
  }
  
  #thank-you-box h1 {
    font-size: 36px; /* increase the font size of the heading */
    margin-bottom: 20px; /* add some bottom margin to the heading */
  }
  
  #thank-you-box p {
    font-size: 24px; /* increase the font size of the paragraphs */
    margin-bottom: 10px; /* add some bottom margin to the paragraphs */
  }
  

      /* Paste the CSS code here */
      
      footer {
  background-color: rgb(255, 252, 252);
  width: 100%;
  position: absolute;
  bottom: 0;
}

.container {
  padding: 11px;
}

.social-icons {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  margin: 0;
  padding: 0;
}

.social-icons li {
  margin-left: 10px;
}

.social-icons li:first-child {
  margin-left: 0;
}

.social-icons a {
  color: #141212;
  font-size: 30px;
  transition: all 0.3s ease;
}

.social-icons a:hover {
  color: #007bff;
}
button.btn.btn-lg.btn-success.btn-block {
  background-color: #d9dee3;
  border: none;
}
input {
  background-color: #ffffff;
}
.white-input {
  background-color: #ffffff;
}


    
</style>
<body>
    <button style="width: 100px; height: 50px; position: absolute; top: 10px; left: 10px;" onclick="redirectToSample()">HOME</button>

    <script>
      function redirectToSample() {
        window.location.href = "index1.html";
      }
    </script><center>
  <div id="thank-you-box">
    <h1>Register Done!</h1>
    <p>Name: <?php echo $_POST['UserName']; ?></p>
    <p>Email: <?php echo $_POST['email']; ?></p>
    
  </div></center>
  
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-6">			
                  <h4>Developed by Nunsavath Shravan Kumar</h4>
              </div>
              <div class="col-md-6">
                  <ul class="social-icons">
                      <h4>Connect with Us</h4>
                      <li><a href="https://github.com/Nshravankumar4/" class="github"><i class="fab fa-github"></i></a></li>
                      <li><a href="https://www.linkedin.com/in/nshravankumar4/" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                      <li><a href="https://www.youtube.com/@nshravankumar4" class="youtube"><i class="fab fa-youtube"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  
  <!-- Scripts -->
  <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
  
</body>

</html>

