let lotto_number=prompt("กรอกเลขที่ต้องการซื้อ:")
let random_number=Math.floor(Math.random()*100)
document.getElementById("result").innerHTML=lotto_number
document.getElementById("random").innerHTML=random_number
if(lotto_number==Math.floor(Math.random()*100)) {
    document.getElementById("result2").innerHTML="ยินดีด้วยคุณถูกรางวัลเลขท้าย 2 ตัว"
}
else{
    document.getElementById("result2").innerHTML="เสียใจด้วยครั้งหน้าว่ากันใหม่"
}


