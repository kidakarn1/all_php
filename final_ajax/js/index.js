$( document ).ready(function() {
  selectDep()//function select ข้อมูล
//ส่วนลบ ข้อมูล
  $(document).on("click",".del_class",function() {
    var id =$(this).attr("id");
    // console.log(id);
    var path = $.ajax({
      url:"delete.php",
      dataType:"json",
      type:"post",
      data:{id:id}
    })
    path.done(function(data){
      if (data['check_del']=='OK'){
        alert('ลบสำเร็จ');
        selectDep();
      }
      else{
        alert('ลบไม่สำเร็จ');
      }
    })
  })//ปิด ส่วนลบข้อมูล
})
//show ข้อมูล
function selectDep(){
  var row = ''
  $.ajax({
    dataType:'json',
    url:'selects.php'
  }).done(function(data){
    console.log(data);
    $.each(data.data,function(key,value){
       row += mRow(value.DEP_ID,value.DEP_NAME);// ชื่อฟิลด์ ออกมาจาก ฐานข้อมูลโดยจะได้จากหน้า ที่ ปั้น array
    })
    $('#show').html(row)
  })
}
//ปิด show ข้อมูล
function mRow(dep_id,dep_name){
  var row = ''
    row += "<tr>"
    row += "<td>"+dep_id+"</td>"
    row += "<td>"+dep_name+"</td>"
    row += "<td>"+"<a href='fromupdate.php?id="+dep_id+"'>แก้ไข</a>"+"</td>"
    row += "<td>"+"<a class='del_class' id='"+dep_id+"'href='#?"+dep_id+"'>ลบ</a>"+"</td>"
    row += "</tr>"
    return row
}
//function เพิ่มข้อมูล
function add(){
    var dep_id =$("input[name='dep_id']").val();
    var dep_name =$("input[name='dep_name']").val();
    console.log(dep_id);
    var path =$.ajax({
      url:"insert_dep.php",
      dataType:"JSON",
      type:"POST",
      data:{dep_id:dep_id,dep_name:dep_name}
    });
    path.done(function(data){
        if (data['check_insert']=='inser_OK'){
          selectDep()
          alert('บันทึกสำเร็จ');
        }
        else{
          alert('บันทึกไม่สำเร็จ'+data['check_insert']);
        }
    });
  }
  //ปิด function add หรือ เพิ่มข้อมูล
  //function อัฟเดช
  function update(){
    var dep_id =$("input[name='DEP_ID']").val();
    var dep_name =$("input[name='DEP_NAME']").val();
    var path =$.ajax({
      url:"update_dep.php",
      dataType:"json",
      type:"POST",
      data:{dep_id:dep_id,dep_name:dep_name}
    })
    path.done(function(data){
      if (data['check_update']=='update_ok'){
          alert('อัฟเดชสำเร็จ');
          window.location.href='index.php';
        }
      else{
        alert('NO_UPDATE');
      }
    });
  }
  //ปิด function อัฟเดช
