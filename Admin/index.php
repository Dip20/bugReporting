<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <!-- sweet alert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
      <!-- font-aswome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
      <!-- custom css -->
      <link rel="stylesheet" href="../main.css">
      <title>Issue And BugReporting - Admin</title>
   </head>
   <body>
      <!-- nav starts here -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
               <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Login</a>
               </li> -->
               <li class="nav-item">
                  <a class="nav-link" href="#">  Goto Main Website</a>
               </li>
            </ul>
         </div>
      </nav>
      <!-- nav ends here -->

      <!-- main container starts here -->
      <div class="container text-center" >
          <h2 class="text  text-muted"><i class="fas fa-bug rotate mr-2"></i> View submissions</h2><br>

            <!-- badge here -->
            <a href="#" class="btn btn-warning">Assigned <span class="badge badge-light">16</span><span class="sr-only">unread messages</span></a>
            <a href="#" class="btn btn-success">solved <span class="badge badge-light">12</span><span class="sr-only">unread messages</span></a>
            <a href="#"  class="btn btn-danger">Reported <span class="badge badge-light">19</span><span class="sr-only">unread messages</span></a>
            <a href="#"  class="btn btn-info">Total Case <span class="badge badge-light">19</span><span class="sr-only">unread messages</span></a>
      </div>
      <br>
        <!-- table starts here -->
        <table class="table table-hover d-none" >
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ReportID</th>
          <th scope="col">Date</th>
          <th scope="col">Email</th>
          <th scope="col">Submited By</th>
          <th scope="col">Type</th>
          <th scope="col">Priority</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>R16102020054637</td>
          <td>16/10/2020</td>
          <td>santusarkar2020@gmail.com</td>
          <td>Developer</td>
          <td>FeedBack</td>
          <td>Low</td>
          <td><p class="badge badge-pill badge-success">Solved</p> </td>
          <td><a href="#" class="btn btn-md btn-info rounded-pill">View</a></td>
        </tr>
      </tbody>
    </table>


    <!-- for mobile view -->
  <div class="container">

    <div class="card" >
      <div class="card-header font-weight-bolder">
        FeedBack
      </div>
      <div class="card-body">
        <div class="row" >
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">#</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>12</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">ReportID</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>R16102020054637</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Date</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>16/10/2020</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Email</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>santusarkar2020@gmail.com</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Submited By</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>D. Sarkar ( Developer )</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Priority</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>Low</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Status</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p class="badge badge-pill badge-success">Solved</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Last update</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>15/10/2020 07:46 pm</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Subject</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>Here is subjectdkjjfof</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Details</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <p>Here is details</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-lg-3">
              <p class="font-weight-bolder">Action</p>
          </div>
          <div class="col-md-9 col-sm-9 col-lg-9">
                <a href="#" class="btn btn-sm btn-info">Update</a>
          </div>
        </div>
      </div>
    </div><br>
  </div>






<br><br>
      <!-- main container Ends here -->

    <!-- <script>swal("Submited!", "Thanks for your submission. Our team will review it as soon as possible.", "success");</script> -->






  <!-- footer -->
  <footer class="text-center py-2 bg-light lead"><p>Copyright &copy; 2020 Copyright Holder All Rights Reserved by <a href="#">Freelancer.org.biz</a> </p></footer>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   </body>
</html>
