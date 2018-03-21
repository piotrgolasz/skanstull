<?php
/**
 * Created by PhpStorm.
 * User: nzpetter
 * Date: 21.03.2018
 * Time: 16:20
 */

class Controller_Core extends Controller
{
    /**
     * @var Dependency_Container DI
     */
    protected $di;

    /**
     * Controller_Core constructor.
     * @param Request $request
     * @param Response $response
     * @throws Dependency_Exception
     * @throws Kohana_Exception
     */
    public function __construct(Request $request, Response $response)
    {
        // Creation Code
        $this->di = new Dependency_Container(Dependency_Definition_List::factory()
            ->from_array(Kohana::$config->load('di')->as_array()));

        parent::__construct($request, $response);
    }
}