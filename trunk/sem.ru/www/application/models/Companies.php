<?php

class Companies extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCompanyById($company_id)
    {
       return $this->db->get_where('companies', array('company_id' => $company_id))->row();
    }
}

?>