<?php

/**
 * Our homepage.
 *
 * Present a summary of the completed orders.
 *
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Admin extends Application {

    function __construct() {
        parent::__construct();
    }

    function index()
    {
        $this->data['pagebody'] = 'admin';

        $attraction = $this->_attractionsmodel->getAll();
        $this->data['attractionedit'] = $attraction;
        $this->render();
    }

    function post()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('location', 'Location', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('image', 'Image', 'required');
        $this->form_validation->set_rules('image1', 'Image 1', 'required');
        $this->form_validation->set_rules('image2', 'Image 2', 'required');

        $this->form_validation->set_message('required', '%s is required.');

        $id = $this->input->post('idh');
        $category = $this->input->post('cateh');

        if ($this->form_validation->run() == TRUE)
        {
            $row = array();
            $row['name'] = $this->input->post('name');
            $row['location'] = $this->input->post('location');
            $row['image'] = $this->input->post('image');
            $row['image1'] = $this->input->post('image1');
            $row['image2'] = $this->input->post('image2');
            $row['description'] = $this->input->post('description');
            $row['pricerange'] = $this->input->post('price');
            if ($category == "Eat")
            {
                $row['foodtype'] = $this->input->post('foodtype');
                $row['togo'] = $this->input->post('togo');
                $row['cardio'] = "";
                $row['dropin'] = "";
                $row['sound'] = "";
                $row['privacy'] = "";
            }
            else if ($category == "Play")
            {
                $row['foodtype'] = "";
                $row['togo'] = "";
                $row['cardio'] = $this->input->post('cardio');
                $row['dropin'] = $this->input->post('dropin');
                $row['sound'] = "";
                $row['privacy'] = "";
            }
            else if ($category == "Study")
            {
                $row['foodtype'] = "";
                $row['togo'] = "";
                $row['cardio'] = "";
                $row['dropin'] = "";
                $row['sound'] = $this->input->post('sound');
                $row['privacy'] = $this->input->post('privacy');
            }
            $this->_attractionsmodel->update($id, $row);
            redirect('/admin');
        }
        else
        {
            $this->edit($id);
        }
    }

    function edit($id)
    {
        $this->load->helper('form');
        $this->data['pagebody'] = 'adminedit';

        $attractionedit = $this->_attractionsmodel->getByID($id);

        $this->data['idh'] = $attractionedit['id'];
        $this->data['cateh'] = $attractionedit['category'];

        $this->data['fid'] = form_label('ID', 'id')
                                . form_input('id', $attractionedit['id'], 'class="form-control" disabled');
        $this->data['fname'] = form_label('Name', 'name')
                                . form_input('name', $attractionedit['name'], 'class="form-control" required');
        $this->data['flocation'] = form_label('Location', 'location')
                                . form_input('location', $attractionedit['location'], 'class="form-control" required');
        $this->data['fdescription'] = form_label('Description', 'description')
                                . form_textarea('description', $attractionedit['description'], 'class="form-control" required');
        $this->data['fcategory'] = form_label('Category', 'category')
                                . form_input('category', $attractionedit['category'], 'class="form-control" disabled');

        $this->data['fimage'] = form_label('Image', 'image')
                                . form_input('image', $attractionedit['image'], 'class="form-control" required');
        $this->data['fimage1'] = form_label('Image 1', 'image1')
                                . form_input('image1', $attractionedit['image1'], 'class="form-control" required');
        $this->data['fimage2'] = form_label('Image 2', 'image2')
                                . form_input('image2', $attractionedit['image2'], 'class="form-control" required');

        $this->data['fprice'] = form_label('Price', 'price')
                                . form_input('price', $attractionedit['pricerange'], 'class="form-control" required');

        if ($attractionedit['category'] == 'Eat')
        {
            $this->data['ffoodtype'] = form_label('Food Type', 'foodtype')
                                . form_input('foodtype', $attractionedit['foodtype'], 'class="form-control" required');
            $this->data['ftogo'] = form_label('Togo', 'togo')
                                . form_input('togo', $attractionedit['togo'], 'class="form-control" required');
            $this->data['fcardio'] = "";
            $this->data['fdropin'] = "";
            $this->data['fsound'] = "";
            $this->data['fprivacy'] = "";
        }
        else if ($attractionedit['category'] == 'Play')
        {
            $this->data['fcardio'] = form_label('Cardio', 'cardio')
                                . form_input('cardio', $attractionedit['cardio'], 'class="form-control" required');
            $this->data['fdropin'] = form_label('Dropin', 'dropin')
                                . form_input('dropin', $attractionedit['dropin'], 'class="form-control" required');
            $this->data['ffoodtype'] = "";
            $this->data['ftogo'] = "";
            $this->data['fsound'] = "";
            $this->data['fprivacy'] = "";
        }
        else if ($attractionedit['category'] == 'Study')
        {
            $this->data['fsound'] = form_label('Sound', 'sound')
                                . form_input('sound', $attractionedit['sound'], 'class="form-control" required');
            $this->data['fprivacy'] = form_label('Privacy', 'privacy')
                                . form_input('privacy', $attractionedit['privacy'], 'class="form-control" required');
            $this->data['ffoodtype'] = "";
            $this->data['ftogo'] = "";
            $this->data['fcardio'] = "";
            $this->data['fdropin'] = "";
        }

        $this->render();
    }
}
