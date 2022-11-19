<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
       <style>
           .sidebar {
               margin: 0;
               padding: 0;
               width: 200px;
               background-color: #f1f1f1;
               position: fixed;
               height: 100%;
               overflow: auto;
           }
           .sidebar a {
               display: block;
               color: black;
               padding: 16px;
               text-decoration: none;
           }
          .sidebar a.active {
               background-color: #04AA6D;
               color: white;
           }
           .sidebar a:hover:not(.active) {
               background-color: #555;
               color: white;
           }
           div.content {
               margin-top: 4%;
               margin-left: 200px;
               padding: 1px 16px;
               height: 1000px;
           }
           @media screen and (max-width: 700px) {
           .sidebar {
               width: 100%;
               height: auto;
               position: relative;
           }
          .sidebar a {float: left;}
           div.content {margin-left: 0;}
          }
          @media screen and (max-width: 400px) {
          .sidebar a {
               text-align: center;
               float: none;
         }
         }
           .navbar{
               overflow: hidden;
               background-color: #333;
               position: fixed;
               top:0;
               width: 100%;
           }
       </style>
    </head>
    <body>
        <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed;">
          <div class="container-fluid">
           <a class="navbar-brand" href="#">Admin Dashboard</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
           </button>
          </div>
        </nav>
        <div class="sidebar">
           <a class="active" href="#home">Jobs</a>
           <a href="jobs.php">Candidates Applied</a>
           <a href="#contact">Contact</a>
           <a href="#about">About</a>
        </div>
            <?php include "header.php"?>
        <div class="content">
          <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Post Job
            </button>
          </p>
          <div class="collapse" id="collapseExample">
          <div class="card card-body">
           <form action="" method="POST">
              <div class="mb-3">
              <label for="Company Name" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="" name="cname" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
              <label for="exampleInputPosition" class="form-label">Position</label>
              <input type="text" class="form-control" id="exampleInputPosition" name="pos">
              </div>
              <div class="mb-3">
              <label for="JobDesc" class="form-label">Job Description</label>
              <input type="text" class="form-control" name="skills" id="JobDesc">
              </div>
               <div class="mb-3">
              <label for="CTC" class="form-label">CTC</label>
              <input type="text" class="form-control" name="CTC" id="CTC">
              </div>
              <button type="submit" class="btn btn-primary" name="job">Submit</button>
              </form>
          </div>
          </div>
          <table class="table">
          <thead>
            <tr>
             <th scope="col">#</th>
             <th scope="col">Company Name</th>
             <th scope="col">Position</th>
             <th scope="col">CTC</th>
           </tr>
          </thead>
         <tbody>
           <tr>
             <th scope="row">1</th>
               <td>TCS</td>
               <td>Software Developer</td>
               <td>8LPA</td>
           </tr>
           <tr>
             <th scope="row">2</th>
             <td>Google</td>
             <td>Digital Marketer</td>
             <td>8LPA</td>
           </tr>
          </tbody>
        </table>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
    