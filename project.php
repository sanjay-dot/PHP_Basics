<html>
        <head>
            <title>Mobile Datasets</title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        </head>
        <body>
            <header>
                    <div class="jumbotron">
                        <div class="display-4 text-center">Add ons</div>
                    </div>
            </header>

                <div id="add-container">
                        <div class="row">
                            <div class="col-6 m-auto border border-danger ">
                                <input type="text" class ="form-control float-left w-75 p-2 m-3"placeholder="Enter details and press add" >
                            
                                <button class="col-1 btn btn-info p-2 ml-3 m-3" id="button"> Add</button>
                            </div>
                        </div>
                    </div>
                </div>

                    <div id="place-container">
                        <div class="row">
                            <div class="col-6 m-auto">
                                    <button class="btn btn-dark btn-lg mt-4 ml-">Paris
                                    <span aria-hidden="true" class="display-5 m-2 ml-4 p-1 text-danger">X</span></button>


                            
                                    <button class="btn btn-dark btn-lg mt-4 ml-3">New York
                                    <span aria-hidden="true" class="display-5 m-2 ml-4 p-1 text-danger">X</span></button> 


                            
                                    <button class="btn btn-dark btn-lg mt-4 ml-4">Tokyo
                                    <span aria-hidden="true" class="display-5 m-2 ml-4 p-1 text-danger">X</span></button>
                                </div> 
                            </div>
                        </div>
                    </div>


<script type="text/javascript">
 $(document).ready(function(){
     $("add-container").on('click','#button',function(){
         var value = $("add-container input").val();
         console.log(value);

         var display = ' <div class="row"><div class="col-6 m-auto"><button class="btn btn-dark btn-lg mt-4 ml-">'+ value +' <span aria-hidden="true" class="display-5 m-2 ml-4 p-1 text-danger">X</span></button></div></div>';

         console.log(display);

         $("display").appendTo("#place-holder");
     })
 })


</script>




        </body>
</html>