<html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello Medicne</h1>



    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
<!-- 
    Option 2: Separate Popper and Bootstrap JS --> 
    
    
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add medicine info
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <div class="mb-3">
    <label for="Name" class="form-label">Medicine Name</label>
    <input type="email" class="form-control" id="Name">
   
  </div>
  <div class="mb-3">
  <label for="myfile">Please insert the picture of the Medicine:</label>
         <input type="file" id="myfile" name="myfile"> 
      </div>
      <div class="mb-3">
    <label for="efc" class="form-label">Efficiecy</label>
    <input type="efc" class="form-control" id="efc">
   
  </div>

  <div class="mb-3">
    <label for="doses" class="form-label">Doses</label>
    <input type="doses" class="form-control" id="doses">
   
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button"  class="btn btn-primary" onclick = "addm()" >Addiii</button>
      </div>
    </div>
  </div>
</div>

<script>
  function addm()
  { 
      var name  = $('.Name').val();
      var fi  = $('.myfile').val();
      var efss = $('.efc').val();
      var doo  = $('.doses').val();


  $.ajax(
    {
               url: "mediadd.php",
               type: 'post',
               data: 
               {
                   names: name,
                 
                   fis:fi,
                   efss: efc,
                   dos: doo



               },
               success: function(data,status){

               console.log(status);

               }
               
    }
  ); 
}
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   

  </body>
</html>