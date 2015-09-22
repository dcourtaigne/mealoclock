<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
        <!-- section des communautés -->
            <!-- section de présentation générale des communautés -->
        <section class="container largeurSite">
        <section>
          <p>Date: <input type="text" id="datepicker"></p>
        </section>

        <section id="event_list" class="row">

     <!--                <?php
     /*foreach ($events as $event) {
       $eventDate=explode('-',$event['event_date']);
       $year = $eventDate[0];
       $month = $eventDate[1];
       $day = $eventDate[2];
       $this->insert('partials/events-list',['event'=>$event,'year'=>$year,'month'=>$month,'day'=>$day]);
     }*/
     ?> -->
        </section>

        <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

<?php $this->stop('main_content') ?>
