/*--
        Countdown
    -----------------------------------*/
    function makeTimer($endDate, $this, $format) {
        var today = new Date();
        var BigDay = new Date($endDate),
          msPerDay = 24 * 60 * 60 * 1000,
          timeLeft = (BigDay.getTime() - today.getTime()),
          e_daysLeft = timeLeft / msPerDay,
          daysLeft = Math.floor(e_daysLeft),
          e_hrsLeft = (e_daysLeft - daysLeft) * 24,
          hrsLeft = Math.floor(e_hrsLeft),
          e_minsLeft = (e_hrsLeft - hrsLeft) * 60,
          minsLeft = Math.floor((e_hrsLeft - hrsLeft) * 60),
          e_secsLeft = (e_minsLeft - minsLeft) * 60,
          secsLeft = Math.floor((e_minsLeft - minsLeft) * 60);
    
        var yearsLeft = 0;
        var monthsLeft = 0
        var weeksLeft = 0;
    
        if ($format != 'short') {
          if (daysLeft > 365) {
            yearsLeft = Math.floor(daysLeft / 365);
            daysLeft = daysLeft % 365;
          }
    
          if (daysLeft > 30) {
            monthsLeft = Math.floor(daysLeft / 30);
            daysLeft = daysLeft % 30;
          }
          if (daysLeft > 7) {
            weeksLeft = Math.floor(daysLeft / 7);
            daysLeft = daysLeft % 7;
          }
        }
    
        var yearsLeft = yearsLeft < 10 ? "0" + yearsLeft : yearsLeft,
          monthsLeft = monthsLeft < 10 ? "0" + monthsLeft : monthsLeft,
          weeksLeft = weeksLeft < 10 ? "0" + weeksLeft : weeksLeft,
          daysLeft = daysLeft < 10 ? "0" + daysLeft : daysLeft,
          hrsLeft = hrsLeft < 10 ? "0" + hrsLeft : hrsLeft,
          minsLeft = minsLeft < 10 ? "0" + minsLeft : minsLeft,
          secsLeft = secsLeft < 10 ? "0" + secsLeft : secsLeft,
          yearsText = yearsLeft > 1 ? 'Years' : 'year',
          monthsText = monthsLeft > 1 ? 'Months' : 'month',
          weeksText = weeksLeft > 1 ? 'Weeks' : 'week',
          daysText = daysLeft > 1 ? 'Days' : 'day',
          hourText = hrsLeft > 1 ? 'Hours' : 'Hr',
          minsText = minsLeft > 1 ? 'Mints' : 'min',
          secText = secsLeft > 1 ? 'Secs' : 'sec';
    
        var $markup = {
          wrapper: $this.find('.countdown__item'),
          year: $this.find('.yearsLeft'),
          month: $this.find('.monthsLeft'),
          week: $this.find('.weeksLeft'),
          day: $this.find('.daysLeft'),
          hour: $this.find('.hoursLeft'),
          minute: $this.find('.minsLeft'),
          second: $this.find('.secsLeft'),
          yearTxt: $this.find('.yearsText'),
          monthTxt: $this.find('.monthsText'),
          weekTxt: $this.find('.weeksText'),
          dayTxt: $this.find('.daysText'),
          hourTxt: $this.find('.hoursText'),
          minTxt: $this.find('.minsText'),
          secTxt: $this.find('.secsText')
        }
    
        var elNumber = $markup.wrapper.length;
        $this.addClass('item-' + elNumber);
        $($markup.year).html(yearsLeft);
        $($markup.yearTxt).html(yearsText);
        $($markup.month).html(monthsLeft);
        $($markup.monthTxt).html(monthsText);
        $($markup.week).html(weeksLeft);
        $($markup.weekTxt).html(weeksText);
        $($markup.day).html(daysLeft);
        $($markup.dayTxt).html(daysText);
        $($markup.hour).html(hrsLeft);
        $($markup.hourTxt).html(hourText);
        $($markup.minute).html(minsLeft);
        $($markup.minTxt).html(minsText);
        $($markup.second).html(secsLeft);
        $($markup.secTxt).html(secText);
    }
    
    $('.countdown').each(function () {
        var $this = $(this);
        var $endDate = $(this).data('countdown');
        var $format = $(this).data('format');
        setInterval(function () {
          makeTimer($endDate, $this, $format);
        }, 0);
    });


    $('.meeta-event-accordion-title').click(function(e) {
            e.preventDefault();
        
        let $this = $(this);
        
        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('meeta-event-accordion-body').removeClass('show');
            $this.parent().parent().find('meeta-event-accordion-body').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });


   
    $(".meeta-event-accordion-item > .meeta-event-accordion-toggle").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".meeta-event-accordion-body").slideUp(200);
        } else {           
            $(".meeta-event-accordion-item > .meeta-event-accordion-toggle").removeClass("active");
            $(this).addClass("active");
            $(".meeta-event-accordion-body").slideUp(200);
            $(this).siblings(".meeta-event-accordion-body").slideDown(200);
        }
    });
