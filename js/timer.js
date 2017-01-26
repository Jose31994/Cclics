/*

var Example1 = new (function() {

    var $stopwatch, // Stopwatch element on the page

        incrementTime = 70, // Timer speed in milliseconds

        currentTime = 0, // Current time in hundredths of a second

        updateTimer = function() {

            $stopwatch.html(formatTime(currentTime));

            currentTime += incrementTime / 10;

        },

        init = function() {

            $stopwatch = $('#stopwatch');

            Example1.Timer = $.timer(updateTimer, incrementTime, true);

        };

    this.resetStopwatch = function() {

        currentTime = 0;

        this.Timer.stop().once();

    };

    $(init);

});*/





function Example1() {

    var $stopwatch, // Stopwatch element on the page

        incrementTime = 70, // Timer speed in milliseconds

        currentTime = 0, // Current time in hundredths of a second

        updateTimer = function() {

            $stopwatch.html(formatTime(currentTime));

            currentTime += incrementTime / 10;

        },

        init = function() {

            $stopwatch = $('#stopwatch');

            Example1.Timer = $.timer(updateTimer, incrementTime, true);

        };

    this.resetStopwatch = function() {

        currentTime = 0;

        this.Timer.stop().once();

    };

    $(init);

};





function Example2() {

    var $stopwatch2, // Stopwatch element on the page

        incrementTime = 70, // Timer speed in milliseconds

        currentTime = 0, // Current time in hundredths of a second

        updateTimer = function() {

            $stopwatch2.html(formatTime(currentTime));

            currentTime += incrementTime / 10;

        },

        init = function() {

            $stopwatch2 = $('#stopwatch2');

            Example2.Timer = $.timer(updateTimer, incrementTime, true);

        };

    this.resetStopwatch = function() {

        currentTime = 0;

        this.Timer.stop().once();

    };

    $(init);

};







var min,sec,hundredths;



// Common functions

function pad(number, length) {

    var str = '' + number;

    while (str.length < length) {str = '0' + str;}

    return str;

}

function formatTime(time) {

      min = parseInt(time / 6000),

      sec = parseInt(time / 100) - (min * 60),

      hundredths = pad(time - (sec * 100) - (min * 6000), 2);

    return (min > 0 ? pad(min, 2) : "00") + ":" + pad(sec, 2) + ":" + hundredths;

}





