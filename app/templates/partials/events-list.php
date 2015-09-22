<ul>
    <li class="col-md-2 text-center">
        <p class="lead"><?= $this->e($day)?></p>
        <p><?= $this->e($month)?></p>
        <p><?= $this->e($year)?><p>
        <p><?= $this->e($event['event_time'])?></p>
    </li>
    <li class="col-md-2">
    <img alt="Independence Day" src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
    </li>
    <li class="col-md-8">
        <strong class="title lead"><?= $this->e($event['event_title'])?></strong>
        <p class="desc"><?= $this->e($event['event_desc'])?></p>
    </li>
</ul>
