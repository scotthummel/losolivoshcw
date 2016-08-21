<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\LosOlivos\Notifications\Flash;
use App\LosOlivos\Mailers\ContactMailer;


class ContactController extends Controller {

    /**
     * @var \App\LosOlivos\Validators\Contact
     */
    private $validator;
    /**
     * @var \App\\LosOlivos\Mailers\ContactMailer
     */
    private $mailer;

    public function __construct(ContactMailer $mailer ) {

        $this->mailer = $mailer;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home.contact');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $user = [];
        $user['name'] = $request->get('name');
        $user['email'] = $request->get('email');
        $user['phone'] = $request->get('phone');
        $user['comments'] = $request->get('comments');

        $this->mailer->contact($user);

        Flash::message('Thank you for contacting us.  We will be in touch shortly.');

        return back();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
