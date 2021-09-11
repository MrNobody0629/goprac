<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <title>GoPrac</title>
  </head>
  <body>

    <!-- Nav baar  -->
    <nav class="navbar navbar-expand-lg navbar-light sticky" id="topav">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span style="color: orangered;font: 50px;">Go</span>Prac</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a id="cat" class="nav-link" aria-current="page" href="#"><i for="cat" class="fas fa-square"></i> Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cogs"></i> Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-users-cog"></i> How it Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fas fa-users"></i> For Expert</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><i class="fas fa-comment-dots"></i> About us</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"><i class="far fa-user-circle"></i> user</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid justify-content-center text-center" style="background-image:url('img/bg-4.jpg');">
        <div class="row p-5">
              <form method="POST" action="insertrecord.php" id="myform">
                <div class="container-outline">
                  <input type="number" name="numbertext" id="numbertext" class="button" placeholder="enter number" Required/>
                  <input type="submit" id="insert" class="fas fa-search button" value="Generate">
                </div>
              </form>
            </div>
            <div class="row justify-content-center align-center pt-0 p-2">
              <div class="col-6 bg-light" id="progbox" style="display:none;">
                  <div class="container-fluid text-center mx-0" style="width: 0%; background-color: orangered;" id="progbar"></div>
                </div>
              </div>
            </div>


      <!-- filter bar -->
      <nav class="navbar navbar-expand-lg" id="filternav">
          <div class="container-fluid">
          <a class="navbar-brand" href="#"><span style="color: orangered;font: 50px;">Filter</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#fcollapse" aria-controls="fcollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-filter"></i>
                </button>
              <div class="collapse navbar-collapse justify-content-center" id="fcollapse">
                  <div class="row navbar-nav">
                      <div class="navbar-item col">
                          <input type="text" id="gencode" placeholder="Search by code" style="width: 300px;">
                      </div>
                      <div class="navbar-item col">
                          <input type="date" date-format="YYYYMMDD" id="gendate" style="width: 300px;">
                      </div>
                      <div class="navbar-item col">
                          <input type="number" id="genlim" placeholder="Search limit"  style="width: 300px;">
                      </div>
                      <div class="navbar-item col">
                          <input type="submit" id="filterbtn" class="button" value="Fetch">
                      </div>
                    </div>
                </div>
            </div>
        </nav>

        <div id="dataftr" class="container-fluid justify-content-center text-center">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col bg-dark text-light p-5" style="height:400px;">
              <h1><span style="background-color: orangered;">Go</span>Prac</h1>
              <h3 style="color: orangered;">Software Developer Assessment Assignment</h3>
              <h5 style="color: white;">Enter fetch button to print grid</h5>
            </div>
            </div>
          </div>
        </div>

        <footer class="footer mb-0" >
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col text-light p-5" style="background-color: orangered;"><h1><span class="text-dark">Go</span>Prac</h1></div>
            </div>
          </div>
        </footer>

    <script src='js/insert.js'></script>
    <script src='js/filter.js'></script>
    <script src='js/delete.js'></script>
    <script src='js/update.js'></script>
    <script src='js/sorttable.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>