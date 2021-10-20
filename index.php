<html>
    <head>
        <title>Mobile database</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <div class="bg-dark">
        <div class="col-sm-2 p-0"><img src="logo.png" class="img-fluid" alt=""></div>
    </div>

    <div class="container-fluid p-0"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


      <div class="row p-0 m-0 ">
        <div class="col-md-8 m-0 p-1">
          <table class="table table-success table-striped" id="mytable">
          
          <thead>
            <tr>
              <th scope="col" id= model>Model Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Price</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody id='mytablebody'>

          </tbody>
      </table>
        </div>

        <div id='form' class="col-md border border-1 p-0 m-0 h-100">
        <p>Enter your mobile details</p>
        <form id='mobile_data' method="POST" enctype="multipart/form-data"> 
        
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">#</span>
            <input type="text" class="form-control"name="model" id="details" id="model" placeholder="Model Number" aria-label="Modelnumber" aria-describedby="basic-addon1">
          </div>  

          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon2">Mobile</span>
            <input type="text" class="form-control" name="name" id="details2" placeholder="Brand" aria-label="Brand" aria-describedby="basic-addon2">
            
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">$</span>
            <input type="text" class="form-control" name="price" id="details3" placeholder="Price"id="basic-url" aria-describedby="basic-addon3">
          </div>

          <label for="image"class="form-label"></label>
          <input class="form-control" id="details4" type="file" id="file" name="file"/>

          <button type="submit" name="submit" id="update" onclick   = clear() class="btn btn-primary btn-lg btn-block p-3 m-2">Update</button>
          <button type ="reset" class="btn btn-primary btn-lg btn-block p-3 m-2">Reset</button>
          </form>

          <script type='text/javascript' src="js.js"></script>
          
        </div>
      </div>
    </div>
</body>
</html>