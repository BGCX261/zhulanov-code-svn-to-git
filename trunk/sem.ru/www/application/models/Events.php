<?php

class Events extends Model
{    public function __construct()
    {        parent::__construct();    }

    public function getEventById($event_id)
    {       return $this->db->get_where('events', array('event_id' => $event_id))->row();    }

    public function getCities()
    {        $this->db->select('city');
    }}

?>