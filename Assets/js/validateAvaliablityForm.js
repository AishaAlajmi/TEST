   
function validateAvaliablityForm() {
      let x = document.getElementById('day').value;
      let y = document.getElementById('time').value;
      const d = new Date(x);
      if(!x || y=="0"){
          if(!x)
                      document.getElementById('erro-msg1').innerHTML ='يجب عليك تحديد التاريخ';  
          else {
                        document.getElementById('day').innerHTML = "x";
                        document.getElementById('erro-msg1').innerHTML ='';
          }
          if(y=="0")
                      document.getElementById('erro-msg2').innerHTML ='يجب عليك تحديد الوقت';  
          else{
                      document.getElementById('erro-msg2').innerHTML =''; 
          }
       
      } else if(d.getDay()=='5' || d.getDay()=='6'){
               document.getElementById('erro-msg1').innerHTML ='لا يوجد مواعيد في عطلة نهاية الأسبوع, اختر تاريخ آخر ';
      }else{
            let text = 'هل انت متأكد من  من إلغاء إتاحة الوقت لاستقبال المواعيد؟\n \n **لا يمكنك إعادة اتاحة الوقت المحدد مجددًا** ';
            if(confirm(text)==true){
                let form = document.getElementById('form');
                let button = document.getElementById('updateBtn');
                form.action = "AvaliableTimes.php";
                button.type="submit";
            }
       }
}
