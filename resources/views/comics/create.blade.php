@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ Route('comics.store') }}" method="post">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo" class="form-control">
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Descrizione</label>
                                <input type="textarea" name="description" id="description" placeholder="Inserisci la descrizione" class="form-control">
                            </div>

                            <div class="col-12 my-3">
                                <label class="control-label my-3">Thumb</label>
                                <input type="url" name="thumb" id="thumb" placeholder="Inserisci la copertina" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">Aggiungi</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection