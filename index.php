<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="icon" href="img/brand-icon.ico">
      <!-- sweet alert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      <!-- font-aswome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <!-- custom css -->
      <link rel="stylesheet" href="main.css">
      <title>Issue And BugReporting</title>
   </head>
   <body>
      <!-- nav starts here -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Issue And BugReporting</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">  Goto Main Website</a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- nav ends here -->

      <!-- main container starts here -->
      <div class="container" >
          <h2 class="text text-left text-muted ml-4"><i class="fas fa-bug rotate mr-2"></i> Please Submit issue / BugReport / Feedback or Suggestions</h2><br>
          <form class="bg-light px-4 py-2" action="index.php" method="post">
            <div class="row  justify-content-center">
              <div class="col-md-12 col-lg-4 col-sm-12 mb-3">
                <label for="">Full Name</label>
                <input type="text" name="" value="" class="form-control" placeholder="Enter your name" required maxlength="12">
              </div>
              <div class="col-md-6 col-lg-4 col-sm-12 mb-3">
                <label for="">Email</label>
                <input type="email" name="" value="" class="form-control" placeholder="Enter your Email" required maxlength="25">
              </div>
              <div class="col-md-6 col-lg-4 col-sm-12 mb-3">
                <label for="">User Type</label>
                  <select class="form-control" name="" required>
                    <option value="">--Select--</option>
                    <option value="User">User</option>
                    <option value="Developer">Developer</option>
                    <option value="Admin">Admin</option>
                  </select>
              </div>
            </div>
            <div class="row  justify-content-center mb-3">
              <div class="col-md-12 col-lg-6 col-sm-12 mb-3">
                <label for="">Select issue</label>
                  <select class="form-control" name="" required>
                    <option value="">--Select--</option>
                    <option value="Issue">Issue</option>
                    <option value="BugReport">BugReport</option>
                    <option value="FeedBack">FeedBack</option>
                    <option value="Suggestion">Suggestion</option>
                  </select>
              </div>
              <div class="col-md-12 col-lg-6 col-sm-12 mb-3">
                <label for="">Select Priority</label>
                  <select class="form-control" name="" required>
                    <option value="">--Select--</option>
                    <option value="Low">Low</option>
                    <option value="Modarate">Modarate</option>
                    <option value="High">High</option>
                  </select>
              </div>
            </div>
            <div class="row  justify-content-center mb-3">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <label for="">Subject ( <small class="font-weight-bolder text-danger">Max 100 Character</small> )</label>
                <input type="text" name="" value="" class="form-control" placeholder="Enter Subject" required maxlength="100">

              </div>
            </div>
            <div class="row  justify-content-center mb-3">
              <div class="col-md-12 col-lg-12 col-sm-12">
                <label for="">Details ( <small class="font-weight-bolder text-danger">Max 500 Character</small> )</label>
                <textarea maxlength="500" required name="" rows="8" cols="80" class="form-control" placeholder="Feel Free to write here about Issue / BugReport / Feedback or Suggestions"></textarea>
              </div>
            </div>
            <div class="row  justify-content-center mb-3">
              <div class="col-md-12 col-lg-12 col-sm-12">
              <button type="submit" name="" class="btn btn-secondary btn-lg">Submit</button>
            </div>
            </div>
          </form>
      </div>
<br><br>
      <!-- main container Ends here -->

    <!-- <script>swal("Submited!", "Thanks for your submission. Our team will review it as soon as possible.", "success");</script> -->






  <!-- footer -->
  <footer class="text-left ml-5 py-2 bg-light lead"><p>Copyright &copy; 2021 Copyright Holder All Rights Reserved by <a href="#">Santu Sarkar </a> </p></footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   </body>
</html>
