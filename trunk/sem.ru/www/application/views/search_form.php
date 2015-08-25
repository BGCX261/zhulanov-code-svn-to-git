<?php echo js_calendar_script('search_event_form');  ?>

<?=form_open('events/search', array('name' => 'search_event_form', 'id' => 'search_event_form'))?>
<?=form_dropdown('city', $cities)?>
<?php echo js_calendar_write('entry_date', time(), true);?>
