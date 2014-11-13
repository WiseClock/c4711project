<?php
/**
 * Generic domain model, with composite (2-part) key
 *
 * This builds on Mymodel (above).
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class _Attractionsmodel extends CI_Model {

    // Constructor

    function __construct() {
        parent::__construct();
    }

//---------------------------------------------------------------------------
//  Aggregate functions
//---------------------------------------------------------------------------
    // Return all records as an array of objects
    function getAll()
    {
        $attractions = array();

        $this->load->database();
        $query = $this->db->query('SELECT * FROM `attractions`');

        foreach ($query->result_array() as $row)
        {
            $attractions[] = $row;
        }

        return $attractions;
    }

    function getByID($id)
    {
        $this->load->database();
        $query = $this->db->query('SELECT * FROM `attractions` WHERE `id` = ' . $id . ' LIMIT 1');

        $row = $query->row_array();

        return $row;
    }

    function update($id, $row)
    {
        $this->load->database();
        $query = $this->db->query('UPDATE `attractions` SET 
                    `name` = "' . $row['name'] . '", 
                    `location` = "' . $row['location'] . '", 
                    `image` = "' . $row['image'] . '", 
                    `image1` = "' . $row['image1'] . '", 
                    `image2` = "' . $row['image2'] . '", 
                    `description` = "' . $row['description'] . '", 
                    `pricerange` = "' . $row['pricerange'] . '", 
                    `foodtype` = "' . $row['foodtype'] . '", 
                    `sound` = "' . $row['sound'] . '", 
                    `privacy` = "' . $row['privacy'] . '", 
                    `togo` = "' . $row['togo'] . '", 
                    `cardio` = "' . $row['cardio'] . '", 
                    `dropin` = "' . $row['dropin'] . '" WHERE `id` = ' . $id);
    }

}
