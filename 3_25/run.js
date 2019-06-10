$(document).ready(function(){
  var row ='';
  $.ajax({
    dataType:'json',
    url:'getData.php'
  }).done(function(data){
    //console.log(data);
    $.each(data,function(key,value){
      row +="<option value='"+value.orderNumber+"'>"
        row +='<td>'+value.orderNumber+'</td>'
      row+='</option>'
    })
    $('select').html(row)
  })
  $('#submit').click(function(){
    //alert($('select').val());
    $.ajax({
      dataType:'json',
      url:'getDetail.php',
      data:{id : $('select').val()}
    }).done(function(data){
      console.log(data);
    })
  })
})
