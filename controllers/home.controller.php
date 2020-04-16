<?php

class BasicMVCSiteHome extends Controller
{

    /**
     * Constructor. Called when the instance is created.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get Function. If the request type is GET then this function will be called.
     *
     * @return string The output to the user.
     */
    public function get()
    {
        return view('home');
    }
    
}

return new BasicMVCSiteHome();