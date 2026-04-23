function updateDateTime(){
const now = new Date();



const date = now.toLocaleDateString('en-GB',{
    day:'2-digit',
    month: 'short',
    year: 'numeric'

});
const time = now.toTimeString('en-GB',{
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit',
    timeZone: 'Asia/Colombo',
    hour12: true
});



document.getElementById("date").innerHTML = date + " | " + time ;
}
updateDateTime();

setInterval(updateDateTime, 1000);
