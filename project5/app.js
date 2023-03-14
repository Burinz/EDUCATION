let round=prompt("คุณจะเล่นทั้งหมดกี่รอบ")

for(var i=0; i < round ;i++){ 
    var answer = prompt (" หัวหรือก้อยพิมพ์มาเลย ")
    var random_answer =""
    if(Math.floor(Math.random() *10)<=4) {
        random_answer="หัว"
    }
    else{
        random_answer="ก้อย"
    }
   if(answer==random_answer){
    alert("ยินดีด้วย")
   }
   else{
    alert("คราวหน้าเอาใหม่")
   }
}