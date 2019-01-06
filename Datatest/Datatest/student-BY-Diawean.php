
<tr>
		<td>微積分</td>
		<td>田惠君 老師</td>
		<td>2018/11/29</td>
		<td>08:00AM~09:00AM</td>
		<td>1 人</td>
		<td>尚未審核</td>
        <td>微積分2-3</td>
        <td>
          <input type="button"  value="取消"  style="background-color:#66818C;border:0;COLOR:white" onclick="cancel()" >
        </td>
</tr>

<script>
var apiUrl="record_data.php"
/*
給後續繼續製作的人:
我留下這個
apiUrl是為了讓你們可以自由運用
需求:
只要在後端可以回傳以下格式的JSON即可
[
  {
    "class":"課程名稱",
    "teacher":"老師姓名",
    "date":"日期",
    "time":"時段",
    "people":"人數",
    "status":"狀態",
    "question":"問題及備註"
  }
]
  
*/
$.ajax({
  "url":apiUrl,
  "type":"GET",
  "dataType": 'json'
  "data":{
    
  },
  "success":function(DataJson){
  
    $.each(DataJson,function(index, element) {
      //TypeOf element = object
      $("#studentPanel").append(
      `
      <tr>
		<td>${element.class}</td>
		<td>${element.teacher}</td>
		<td>${element.date}</td>
		<td>${element.time}</td>
		<td>${element.people}</td>
		<td>${element.status}</td>
        <td>${element.question}</td>
        <td>
          <input type="button"  value="取消"  style="background-color:#66818C;border:0;COLOR:white" onclick="cancel()" >
        </td>
      </tr>
      `
      )
    });
    
  }
})
</script>
<script>
  function cancel() {
    if(confirm("您確定要取消預約嗎？")){
      alert("已取消預約");
      location.href='student_record.php';
    }else{
      alert("未取消預約")
    }         
</script>