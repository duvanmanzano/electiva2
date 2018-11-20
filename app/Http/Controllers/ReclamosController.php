<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateReclamosRequest;
use App\Http\Requests\UpdateReclamosRequest;
use App\Repositories\ReclamosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ReclamosController extends AppBaseController
{
    /** @var  ReclamosRepository */
    private $reclamosRepository;

    public function __construct(ReclamosRepository $reclamosRepo)
    {
        $this->reclamosRepository = $reclamosRepo;
    }

    /**
     * Display a listing of the Reclamos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->reclamosRepository->pushCriteria(new RequestCriteria($request));
        $reclamos = $this->reclamosRepository->all();

        return view('reclamos.index')
            ->with('reclamos', $reclamos);
    }

    /**
     * Show the form for creating a new Reclamos.
     *
     * @return Response
     */
    public function create()
    {
        return view('reclamos.create');
    }

    /**
     * Store a newly created Reclamos in storage.
     *
     * @param CreateReclamosRequest $request
     *
     * @return Response
     */
    public function store(CreateReclamosRequest $request)
    {
        $input = $request->all();

        $reclamos = $this->reclamosRepository->create($input);

        Flash::success('Reclamo Guardado Correctamente.');

        return redirect(route('reclamos.index'));
    }

    /**
     * Display the specified Reclamos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $reclamos = $this->reclamosRepository->findWithoutFail($id);

        if (empty($reclamos)) {
            Flash::error('Reclamo no encontrado');

            return redirect(route('reclamos.index'));
        }

        return view('reclamos.show')->with('reclamos', $reclamos);
    }

    /**
     * Show the form for editing the specified Reclamos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $reclamos = $this->reclamosRepository->findWithoutFail($id);

        if (empty($reclamos)) {
            Flash::error('Reclamo no encontrado');

            return redirect(route('reclamos.index'));
        }

        return view('reclamos.edit')->with('reclamos', $reclamos);
    }

    /**
     * Update the specified Reclamos in storage.
     *
     * @param  int              $id
     * @param UpdateReclamosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateReclamosRequest $request)
    {
        $reclamos = $this->reclamosRepository->findWithoutFail($id);

        if (empty($reclamos)) {
            Flash::error('Reclamo no encontrado');

            return redirect(route('reclamos.index'));
        }

        $reclamos = $this->reclamosRepository->update($request->all(), $id);

        Flash::success('Reclamo Actualizado Satisfactoriamente.');

        return redirect(route('reclamos.index'));
    }

    /**
     * Remove the specified Reclamos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $reclamos = $this->reclamosRepository->findWithoutFail($id);

        if (empty($reclamos)) {
            Flash::error('Reclamo no encontrado');

            return redirect(route('reclamos.index'));
        }

        $this->reclamosRepository->delete($id);

        Flash::success('Reclamo Eliminado Correctamente.');

        return redirect(route('reclamos.index'));
    }
}
