<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add medicine info
</button>

<!-- Modal -->
<div class = "container "> 
<div id = "record_contant">

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <h3>All Data</h3>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <!-- <h3>All Data</h3> -->
     
      <div class="modal-body">
      
      <div class="mb-3">
    <label for="Name" class="form-label">Medicine Name</label>
    <input type="" class="form-control" id="Name">
   
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
        <button type="button"  class="btn btn-primary" onclick = "addm()" >Addi</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


<script> 

function readrecord()
{
      var readrecord = "readrecord";  
      
  $.ajax(
    {
               url: "mediadd.php",
               type: 'post',
               data: 
               {
                  readrecord: readrecord,

                   },
               success: function(data,status){

                  $('#record_contant').html(data);

               }

              }
              
               
    
  ); 

}
    
  function addm()
  { 
    

      var name  = $('#Name').val();
      var fi  = $('#myfile').val();
      var efss = $('#efc').val();
      var doo  = $('#doses').val();
  
     


  $.ajax(
    {
               url: "mediadd.php",
               type: 'post',
               data: 
               {
                   names: name,
                 
                   fis:fi,
                   efsss: efss,
                   dos: doo


               },
               success: function(data,status){

                  // console.log(data);
                  readrecord()

               }

              }
              
               
    
  ); 
}

</script>

</div>









    

</body>
</html>

