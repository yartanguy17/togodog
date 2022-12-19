<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReservationRequest;
use App\Models\{Toilettag, User};

class ReservationController extends Controller
{
  public function index()
  {
    $reservations = Toilettag::all();

    return view(('admin.reservation.index'), compact('reservations'));
  }

  public function show(Toilettag $toilettag)
  {
    return view('admin.reservation.show', compact('toilettag'));
  }

  public function create()
  {
    return view('admin.reservation.show', ['users' => User::all()]);
  }

  public function store(ReservationRequest $reservationRequest)
  {
    Toilettag::create($reservationRequest->all());
    return redirect()->route('toilettage')->with('success', 'Reservation effectuée avec succès');
  }

  public function edit(Toilettag $toilettag)
  {
    return view('admin.reservation.edit', compact('toilettag'));
  }

  public function update(ReservationRequest $reservationRequest, Toilettag $toilettag)
  {
    $toilettag->update($reservationRequest->all());
    return back()->with('info', 'Informations du toilettage mises à jour avec succès');
  }

  public function destroy(Toilettag $toilettag)
  {
    $toilettag->delete();
    return redirect()->route('toilettage')->with('info', 'Toilettage supprimé avec succès');
  }
}
