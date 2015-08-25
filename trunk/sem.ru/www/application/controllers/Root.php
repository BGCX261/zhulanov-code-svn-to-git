<?php

class Root extends Controller
{
    {
        $this->load->model('Events');
        $this->load->model('Companies');
        $this->load->model('Instr');
        $this->load->plugin('js_calendar');

    public function index()
    {
        $data['content'] = $this->load->view('search_form', '', TRUE);
        $this->load->view('main', $data);

    public function getEvent()
    {
        $data['event'] = $this->Events_model->getEventById($event_id);
        $data['event_tpl'] = $this->load->view('event_tpl', $data, TRUE);
        $this->load->view('main', $data);

    public function getCompany()
    {
        $company_id = intval($this->uri->segment(2));
        $data['company'] = $this->Companies_model->getCompanyById($company_id);
        $data['content'] = $this->load->view('company_tpl', $data, TRUE);
        $this->load->view('main', $data);
    }

    public function getInstr()
    {
        $data['instr'] = $this->Instr_model->getCompanyById($instr_id);
        $data['content'] = $this->load->view('instr_tpl', $data, TRUE);
        $this->load->view('main', $data);



?>