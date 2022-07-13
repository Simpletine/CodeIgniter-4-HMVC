<?php

namespace App\Modules\NewModules\Controllers;

use CodeIgniter\Controller;

class Jumping extends Controller
{
<<<<<<< Updated upstream
=======
    private $userModel;

    /**
     * Constructor.
     */
>>>>>>> Stashed changes
    public function __construct()
    {
    }

<<<<<<< Updated upstream
    public function index($segmentId = 0)
    {
        // if inside current folder, is more simple as shown
=======
    public function index()
    {
        // If inside current folder, is more simple as shown
>>>>>>> Stashed changes

        // Direct with class name
        $jumple = new NextJumple();
        // Get result inside admin modules
        $resultAdmin = new \App\Modules\Admin\Controllers\Dashboard();
        $abc = array();
        $abc['result'] = $resultAdmin->getResultHere('add with this text');
        $abc['result'] .= '<br/> an additional from next jumple' . $jumple->index('add with this text inside jumper');
        return view('samplePage', $abc);
    }
}
