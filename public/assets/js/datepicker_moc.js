
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
    var output
    var $eventList= $("<ul/>");;
      for (var i=0; i<data.length ; i++){
        dateArray[i] = data[i].event_date;
        var event_date = data[i].event_date.split('-');
        var $eventInfo= $('<li/>')
            $eventInfo.attr('id', data[i].event_date)
            $eventInfo.append('<p class="hidden">' + data[i].event_date + '</p>')
            $eventInfo.append('<p>' + event_date[2] + '</p>')
            $eventInfo.append('<p>' + event_date[1] + '</p>')
            $eventInfo.append('<p>' + event_date[0] + '</p>')
            $eventInfo.append('<p>' + data[i].event_time + '</p>')
            $eventInfo.append('<p>' + data[i].event_title + '</p>')
            $eventInfo.append('<p>' + data[i].event_desc + '</p>')
            $eventInfo.append("<img alt='Independence Day' src='https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg' />")
            $eventInfo.prependTo($eventList);
      }
      $("#event_list").html($eventList);

      console.log(dateArray);
/*
      $(eventInfo).appendTo(output);
      $(output).appendTo('#event_list');*/
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
        console.log(selectDate);
        $('#event_list li').each(function() {                    // loop through the list
          var liId = $(this).attr('id'); // get value of the <li>
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
