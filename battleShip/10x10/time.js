let time=false;
function get_elapsed_time_string(total_seconds) {
    if(time) {
        function pretty_time_string(num) {
            return (num < 10 ? "0" : "") + num;
        }

        let hours = Math.floor(total_seconds / 3600);
        total_seconds = total_seconds % 3600;

        let minutes = Math.floor(total_seconds / 60);
        total_seconds = total_seconds % 60;

        let seconds = Math.floor(total_seconds);

        // Pad the minutes and seconds with leading zeros, if required
        hours = pretty_time_string(hours);
        minutes = pretty_time_string(minutes);
        seconds = pretty_time_string(seconds);

        // Compose the string for display
        let currentTimeString = hours + ":" + minutes + ":" + seconds;

        return currentTimeString;
    }
}


$("#start").on("click",function (){
    time=true;
    let elapsed_seconds = 300;
        setInterval(function () {
            elapsed_seconds = elapsed_seconds - 1;
            if(elapsed_seconds==0) {
                time = false;
            $("#main").hide();
            }
            else
            $('#box_header').text(get_elapsed_time_string(elapsed_seconds));
        }, 1000);

});

