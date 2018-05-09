function initMap() {

    var latLng = {
        lat:9.3725257,
        lng: -83.7039714
    }

    var map = new google.maps.Map(document.getElementById('map'), {
        center: latLng,
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });   
    
    var contentTooltip = '<h2>TPCAMP</h2><p>10 - 12 December</p>';
    var tooltipMarker = new google.maps.InfoWindow({
        content: contentTooltip
    });
    
    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'TCPCAMP'
    });

    marker.addListener('click', function(){
        tooltipMarker.open(map, marker);
    })
}

(function(){
    'use strict';

    var gift = document.getElementById('gift');
    document.addEventListener('DOMContentLoaded', function(){

        //Fields user data
        var name = document.getElementById('name');
        var lastName = document.getElementById('lastName');
        var email = document.getElementById('email');

        //Fields pass
        var passDay = document.getElementById('pass_day');
        var passTwoDays = document.getElementById('pass_two_days');
        var fullPass = document.getElementById('full_pass');

        //Buttons and divs
        var calculate = document.getElementById('calculate');
        var errorDiv = document.getElementById('error');
        var registerButton = document.getElementById('btnRegister');
        var result = document.getElementById('product_list');
        var totalSum = document.getElementById('total_sum');

        //Extras
        var stickers = document.getElementById('stickers');
        var shirts = document.getElementById('event_shirt');

        registerButton.disabled = true;


        //Events Listener
        if(document.getElementById('calculate')){
        
            calculate.addEventListener('click', calculateAmount);

            passDay.addEventListener('blur', showDays);
            passTwoDays.addEventListener('blur', showDays);
            fullPass.addEventListener('blur', showDays);

            name.addEventListener('blur', validateForm);
            lastName.addEventListener('blur', validateForm);
            email.addEventListener('blur', validateForm);
            email.addEventListener('blur', validateEmail);


            //Functions Events 
            function calculateAmount(event) {
                event.preventDefault();

                if (gift.value === '') {
                    alert('Choose present')
                    gift.focus();
                } else {
                    var dayTicket = parseInt(passDay.value, 10) || 0,
                        tickets2Days = parseInt(passTwoDays.value, 10) || 0,
                        fullTicket = parseInt(fullPass.value, 10) || 0,
                        amountShirts = parseInt(shirts.value, 10) || 0,
                        amountStickers = parseInt(stickers.value, 10) || 0;

                    var totalPay = (dayTicket * 30) + (tickets2Days * 45) + (fullTicket * 50);
                    totalPay += ((amountShirts * 10) * 0.93) + (amountStickers * 2);
                    
                    var productList = [];

                    if (dayTicket > 0) {
                    productList.push(dayTicket + ' Pass for a day');
                    }
                    if (tickets2Days > 0) {
                        productList.push(tickets2Days + ' Pass for two day');
                    }
                    if (fullTicket > 0) {
                        productList.push(fullTicket + ' Full pass'); 
                    }
                    if (amountShirts > 0) {
                        productList.push(amountShirts + ' Shirts');
                    }
                    if (amountStickers > 0) {
                        productList.push(amountStickers + ' Stickers');
                    }

                    result.style.display = 'block';
                    result.innerHTML = '';
                    for (let i = 0; i < productList.length; i++) {
                        result.innerHTML  += productList[i] + '<br>';
                    }

                    totalSum.innerHTML = '$' + totalPay.toFixed(2);

                    registerButton.disabled = false;

                    document.getElementById("total").value = totalPay;
                }
            }
            
            function showDays() {
                var dayTicket = parseInt(passDay.value, 10) || 0,
                    tickets2Days = parseInt(passTwoDays.value, 10) || 0,
                    fullTicket = parseInt(fullPass.value, 10) || 0;

                var choosenDays = [];

                if (dayTicket > 0) {
                    choosenDays.push('friday');
                }
                if (tickets2Days > 0) {
                    choosenDays.push('friday', 'saturday');
                }
                if (fullTicket > 0) {
                    choosenDays.push('friday', 'saturday', 'sunday');
                }

                for (let i = 0; i < choosenDays.length; i++) {
                    document.getElementById(choosenDays[i]).style.display = 'block';
                }
            }

            function validateForm() {
                if (this.value == '') {
                    this.style.border = '1px solid red';
                }
                else{
                    this.style.border = '1px solid #cccccc';
                }
            }

            function validateEmail() {
                if (this.value.indexOf('@') > -1) {
                    this.style.border = '1px solid red';
                }
                else{
                    this.style.border = '1px solid #cccccc';
                }
            }
        }
    });//DOM content loaded
})();


$(function(){

    //Add class to menu
    $('body.conference .main-navigation a:contains(Conference)').addClass('active');
    $('body.calendar .main-navigation a:contains(Calendar)').addClass('active');
    $('body.guests .main-navigation a:contains(Guests)').addClass('active');

    //Program Conference 
    $('.event-program .info:first').show();

    $('.program-menu a').on('click', function(){
        var link = $(this).attr('href');
       
        $('.program-menu a').removeClass('activo');
        $(this).addClass('activo');
        
        $('.hide').hide();
        $(link).fadeIn(1000);

        //avoid a little jump
        return false;
    }); 

    //Stay Menu 
    var windowHeight = $(window).height();
    var barHeight = $('.bar').innerHeight();

    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.bar').addClass('fixed');
            $('body').css({'magin-top': barHeight+'px'});
        }else{
            $('.bar').removeClass('fixed');
            $('body').css({'magin-top': '0px'});
        }
    });

    //Menu Responsive
    $('.mobile-menu').on('click', function(){
        $('.main-navigation').slideToggle();
    });

    /*** Plugins ****/
    //Letter effect - lettring
    $('.site-name').lettering();

    //Animations for numbers
    var list = $('.event-resume');
    if (list.length > 0) {
        $('.event-resume').waypoint(function(){
            $('.event-resume li:nth-child(1) p').animateNumber({number: 6}, 1200);
            $('.event-resume li:nth-child(2) p').animateNumber({number: 15}, 1200);
            $('.event-resume li:nth-child(3) p').animateNumber({number: 3}, 1500);
            $('.event-resume li:nth-child(4) p').animateNumber({number: 9}, 1200);
        }, {
            offset:'60%'
        });
    }
    
    //Countdown
    $('.countdown').countdown('2018/12/10 09:00:00', function(event){
        $('#days').html(event.strftime('%D'));
        $('#hours').html(event.strftime('%H'));
        $('#minutes').html(event.strftime('%M'));
        $('#seconds').html(event.strftime('%S'));
    });

    //Colorbox
    $('.guest-info').colorbox({inline:true, width:"50%"});

    //Newsletter
    $('.btn_newsletter').colorbox({inline:true, width:"50%"});
    
});
