$("#mobile_data").on('submit',function(e){
    e.preventDefault();
    var filename = $('input[type=file]').val().replace(/.*(\/|\\)/, '');
    var ex = filename.split(".")[1];
    var extention = ["jpg","png","jpeg"];
    if(extention.includes(ex))
    {
      $("#mytablebody").empty();
    $.ajax({
        url: "forms.php",
        method: "POST",
        data : new FormData(this),
        contentType: false,
              cache: false,
        processData:false,
        success: function(html){
        clear();
        console.log(html);
        if(2 == parseInt(html))
        {
          // console.log("error");
          alert("Please upload valid image");
        }
        var obj = JSON.parse(html)
        
        console.log(html);
        // console.log(obj[0]["Model"]);

        var tbl=$("<table/>").attr("id","mytable");
          
          var len = obj.length;
          for(var i=0;i<obj.length;i++)
          {
              var tr="<tr>";
              var td1="<td>"+obj[i]["Model"]+"</td>";
              var td2="<td>"+obj[i]["Name"]+"</td>";
              var td3="<td>"+obj[i]["Price"]+"</td>";
              var td4 = "<td class='col-2'> <img src='uploads/"+obj[i]["filename"]+"' class='img-thumbnail'/></td></tr>";    
              $("#mytable").append(tr+td1+td2+td3+td4);
              var len = obj.length;
        }

        }
      });
    }

    else{
      alert("Image format mis-match");
    }
});
  function clear(){
    document.getElementById("details").value = "";
    document.getElementById("details2").value = ""
    document.getElementById("details3").value = ""
    document.getElementById("details4").value = ""
  };
