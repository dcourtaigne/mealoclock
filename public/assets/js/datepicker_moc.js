
/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood{at}iinet.com.au),
        Stéphane Nahmani (sholby@sholby.net),
        Stéphane Raimbault <stephane.raimbault@gmail.com> */
(function( factory ) {
  if ( typeof define === "function" && define.amd ) {

    // AMD. Register as an anonymous module.
    define([ "../jquery.ui.datepicker" ], factory );
  } else {
    // Browser globals
    factory( jQuery.datepicker );
  }
}(function( datepicker ) {
  datepicker.regional['fr'] = {
    closeText: 'Fermer',
    prevText: 'Précédent',
    nextText: 'Suivant',
    currentText: 'Aujourd\'hui',
    monthNames: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin',
      'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
    monthNamesShort: ['janv.', 'févr.', 'mars', 'avril', 'mai', 'juin',
      'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'],
    dayNames: ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'],
    dayNamesShort: ['dim.', 'lun.', 'mar.', 'mer.', 'jeu.', 'ven.', 'sam.'],
    dayNamesMin: ['D','L','M','M','J','V','S'],
    weekHeader: 'Sem.',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''};
  datepicker.setDefaults(datepicker.regional['fr']);

  return datepicker.regional['fr'];

}));

 var dateArray = [];

  $.get('eventAjax',function(data){
    console.log(data);
    var $eventList= $("<ul/>");;
    $eventList.addClass('list-unstyled');
      for (var i=0; i<data.length ; i++){
        dateArray[i] = data[i].event_date;
        if(dateArray[i] !== dateArray[i-1] || i == 0 ){
        var $eventInfo= $('<li/>')
            $eventInfo.attr('id', data[i].event_date)
            $eventInfo.addClass('row center')
        //var event_date = data[i].event_date.split('-');
            $eventInfo.append( "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 vertClair'>\
                                <p class='text-center h4 color-white'>" + data[i].dateFR + "</p>\
                                </div>")
        }
        $eventInfo.append("<div class='col-xs-12 col-sm-3 col-md-3 col-lg-3 bg-success marginTB20'>\
                            <h4 class='text-center noMargin'>" + data[i].event_time + "</h4>\
                            </div>")
        $eventInfo.append("<article class='col-xs-12 col-sm-7 col-md-7 col-lg-7'>\
                            <h3 class='noMargin marginTop20'><a href='#'><strong>" + data[i].event_title + "</strong></a></h3>\
                            <p class='noMargin'>Chez <a href='#'>" + data[i].user_name + "</a>, Paris "+ data[i].event_location + "</p>\
                            <p class='marginTop20 hidden-xs'>" + data[i].event_desc + "</p>\
                            </article>")
        $eventInfo.append("<div class='col-xs-12 col-sm-2 col-md-2 col-lg-2'>\
                            <div class='text-center marginTop20'>\
                            <a href='#'><img src='/mealoclock/public/assets/img/saladebis.jpg' class='img-responsive'></a>\
                            </div>\
                          </div>")

        $eventInfo.prependTo($eventList);
        $('<br>').appendTo($eventList);
      }
      $("#event_list").html($eventList);

      console.log(dateArray);
    })

    //console.log(data);
    var dmy='';
    function available(date){

      dmy = date.getFullYear() + "-" + ( '0' + (date.getMonth()+1) ).slice( -2 ) + "-" + ( '0' + (date.getDate()) ).slice( -2 );
      console.log(dmy);
      if ($.inArray(dmy, dateArray) !== -1) {
        return [true, "","Available"];
      } else {
        return [false,"","unAvailable"];
      }
    }

    $('#datepicker').datepicker({
      beforeShowDay: available,
      onSelect: function(date){
        var arr = date.split('/');
        var selectDate = arr[2] + "-" + arr[1] + "-" + arr[0];
        //console.log(selectDate);
        $('#event_list li').each(function() {                    // loop through the list
          var liId = $(this).attr('id'); // get value of the id attribute of the  <li>
          if(liId == selectDate) {      // search if textboxVal is in listVal
              $(this).show();                         // if true show this <li>
          } else {
              $(this).hide();                         // else hide this <li>
          }
        });
      }
    });

    $('#resetDate').on('click', function(){
        $.datepicker._clearDate('#datepicker');
        $('#event_list li').each(function() {
          $(this).show();
        });

    });
