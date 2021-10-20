$("#mobile_data").on('submit',function(e){
    e.preventDefault();
    $("#mytablebody").empty();
    $.ajax({
        url: "forms.php",
        method: "POST",
        // data : $("#mobile_data").serialize(),
        data: new FormData( this ),
        success: function(html){
        clear();
        var obj = JSON.parse(html)
        console.log(html);
        console.log(obj[0]["Model"]);

        var tbl=$("<table/>").attr("id","mytable");
          // $("#div1").append(tbl);
          var len = obj.length;
          for(var i=0;i<obj.length;i++)
          {
              var tr="<tr>";
              var td1="<td>"+obj[i]["Model"]+"</td>";
              var td2="<td>"+obj[i]["Name"]+"</td>";
              var td3="<td>"+obj[i]["Price"]+"</td></tr>";

            $("#mytable").append(tr+td1+td2+td3);
        }
        
        }

});
});
  function clear(){
    document.getElementById("details").value = "";
    document.getElementById("details2").value = ""
    document.getElementById("details3").value = ""
    document.getElementById("details4").value = ""
  };