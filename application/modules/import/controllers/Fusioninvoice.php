<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * InvoicePlane
 *
 * @author         InvoicePlane Developers & Contributors
 * @copyright      Copyright (c) 2012 - 2018 InvoicePlane.com
 * @license        https://invoiceplane.com/license.txt
 * @link           https://invoiceplane.com
 */

/**
 * Class Fusioninvoice
 *
 * Import process
 * 1. User sets the database credentials for his Fusioninvoice database
 * 2. Database connection is stored in the settings if database is available
 * 3. User is redirected to import overview. We can't make sure that all data is imported
 *      correctly if we import all data at once (webserver timeouts).
 * 4. User selects the data to import and starts the import process.
 * 5. If the import was successful, user is redirected back to overview and selects the next
 *      table.
 * 6. Repeat process until all data is imported.
 */
class Fusioninvoice extends Admin_Controller
{

    /**
     * Import constructor.
     */
    public function __construct()
    {
        parent::__construct();

//        $this->load->model('mdl_fiimport');
    }

    /**
     * @param int $page
     */
    public function index($page = 0)
    {
        // @TODO Check if Fi database credentials are stored in the settings

        echo 'blaaaa';

        $this->layout->buffer('content', 'import/fusioninvoice_index');
        $this->layout->render();
    }

    public function form()
    {
        if ($this->input->post('btn_submit')) {

            $fi_db = [
                'hostname' => $this->input->post('db_hostname'),
                'port' => $this->input->post('db_port'),
                'username' => $this->input->post('db_username'),
                'password' => $this->input->post('db_password'),
                'database' => $this->input->post('db_database'),
            ];

            // @TODO Add check if Fi database is available

            // @TODO Save Fi database details to settings

        }

        $this->layout->buffer('content', 'import/fusioninvoice_form');
        $this->layout->render();
    }

    public function import()
    {
        $ip_db = $this->load->database('default', true);

        // @TODO Initialize FI database connection like this:
        $fi_db = $this->load->database([
            'dsn' => '',
            'hostname' => $this->input->post('db_hostname'),
            'port' => $this->input->post('db_port'),
            'username' => $this->input->post('db_username'),
            'password' => $this->input->post('db_password'),
            'database' => $this->input->post('db_database'),
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => false,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => false,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => false,
            'compress' => false,
            'stricton' => false,
            'failover' => [],
            'save_queries' => true,
        ], true);

        // Get information to import
        // @TODO Import the details for the selected table
        $clients = $fi_db->get('clients')->result();
        $users = $fi_db->get('users')->result();

        $payment_methods = $fi_db->get('payment_methods')->result();
        $tax_rates = $fi_db->get('tax_rates')->result();

        $products = $fi_db->get('item_lookups')->result();

        $quotes = $fi_db->get('quotes')->result();
        $invoices = $fi_db->get('invoices')->result();

        $payments = $fi_db->get('payments')->result();

        $this->layout->buffer('content', 'import/fusioninvoice_index');
        $this->layout->render();
    }

}
