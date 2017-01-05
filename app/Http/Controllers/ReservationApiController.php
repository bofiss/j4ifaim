<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Menu;
use App\Client;
use App\Repositories\ReservationRepository;
use App\Reservation;
use App\Transformer\ReservationTransformer;

class ReservationApiController extends Controller
{


    protected $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all task
        $menus = Menu::paginate(15);
        // Return a collection of $task with pagination
        return $this->response->withPaginator($menus, new  MenuTransformer());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $menu = Menu::where('titre', '=', $request->input('menu'))->get(['id']);

      $client = new Client();
      $client->nom = $request->input('nom');
      $client->tel = $request->input('tel');
      $client->email = $request->input('email');
      $reservation = new Reservation();
      $reservation->heure_reservation = $request->input('heure_reservation');
      $reservation->nombre_de_personne= $request->input('nbpersonne');

      if($client->save() ) {
        $reservation->client_id= $client['id'];
       if($reservation->save()){
         $reservation->menus()->attach($menu);
         $MyReservation = new ReservationRepository($client->nom,$client->tel, $client->email, $request->input('menu'),$reservation->heure_reservation,   $reservation->nombre_de_personne );

           return $this->response->withItem($MyReservation, new  ReservationTransformer());
       }else{
           return $this->response->errorInternalError('Could not created a reservation');
       }

     }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
