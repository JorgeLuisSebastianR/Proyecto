@extends('layout.layout')
@section('content')

    <section class = "hero is-link">
        <div class = "hero-body">
            <p class = "title">
                Formulario para registrar una nueva materia prima
            </p>
        </div>
    </section>

    <section class = "section">
        <form action = "{{ route('materiaPrima.store') }}" method = "post">
            @csrf
            <div class = "columns">
                <div class = "column">
                    <div>
                        <label for="">Tipo: </label>
                        <input class="input is-large" type="text" name="marca" id="">
                    </div>

                    <div>
                        <label for="">Nombre: </label>
                        <input class="input is-large" type="text" name="nombre" id="">
                    </div>
                    
                    <div>
                        <label for="">Marca: </label>
                        <input class="input is-large" type="text" name="marca" id="">
                    </div>

                    <div>
                        <label for="">Modelo: </label>
                        <input class="input is-large" type="text" name="modelo" id="">
                    </div>

                    <div>
                        <label for="">Cantidad: </label>
                        <input class="input is-large" type=number" name="cantidad" step="1" min="0" id="">
                    </div>
                    
                    <div>
                        <label for="">Alto: </label>
                        <input class="input is-large" type="number" name="alto" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Largo: </label>
                        <input class="input is-large" type="number" name="largo" step="0.1" min="0" id="">
                    </div>

                    <div>
                        <label for="">Ancho: </label>
                        <input class="input is-large" type="number" name="ancho" step="0.1" min="0" id="">
                    </div>
                </div>
            </div>

            <div>
                <div class="is-flex is-justify-content-space-around">
                    <a href="{{ url('materiaPrima/') }}" class="button is-danger is-large">X Cancelar</a>
                    <input class="button is-light is-large" type="reset" value="Restablecer">
                    <input class="button is-link is-large" type="submit" value="Guardar">
                </div>
            </div>
        </form>
    </section>
@endsection