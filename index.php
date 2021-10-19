<html>
    <head>
        <title>Mobile database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    <div class="bg-dark">
        <div class="col-sm-2"><img src="logo.png" class="img-fluid" alt="">
</div>
    </div>

    <div class="container-fluid p-2">

      <div class="row">
        <div class="col-md-8 m-1">
          <table class="table table-success table-striped">
          <thead>
            <tr>
              <th scope="col" id= model>Model Name</th>
              <th scope="col">Brand</th>
              <th scope="col">Price</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
      </table>
        </div>
        <div id='form' class="col-md border p-0 border-2  m-2">
        <h3>Enter your mobile details</h3>
        <form>
        
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">#</span>
            <input type="text" class="form-control" placeholder="Model Number" aria-label="Modelnumber" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon2">Mobile</span>
            <input type="text" class="form-control" placeholder="Brand" aria-label="Brand" aria-describedby="basic-addon2">
            
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">$</span>
            <input type="text" class="form-control" placeholder="Price"id="basic-url" aria-describedby="basic-addon3">
          </div>
          <input type="submit" value="Upload Image" class="btn1">

          <input type="submit" value="Update" class="btn2">

          </form>
        </div>
      </div>

    </div>

    
</body>
</html>