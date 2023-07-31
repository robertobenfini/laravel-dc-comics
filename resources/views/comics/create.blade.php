@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action=" {{ Route('comics.store') }} " method="post">
                    @csrf
                    <div class="form-group border p-4">
                        <div class="row">
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Titolo</label>
                                <input type="text" name="title" id="title" placeholder="Inserisci il titolo" class="form-control" required>
                            </div>
                            <div class="col-12 my-3">
                                <label class="control-label my-3">Thumb</label>
                                <input type="url" name="thumb" id="thumb" placeholder="Inserisci la thumb" class="form-control" required>
                            </div>
                            
                                <button type="submit" class="btn btn-success">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection