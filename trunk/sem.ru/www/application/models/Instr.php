<?php

class Instr extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getInstrById($instr_id)
    {
       return $this->db->get_where('instr_id', array('instr_id' => $instr_id))->row();
    }
}

?>