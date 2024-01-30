function getCurrentTime(){
    let today = new Date();
    postMessage(today);
    setTimeout("getCurrentTime()", 1000);
}

getCurrentTime();