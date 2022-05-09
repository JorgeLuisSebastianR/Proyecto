@extends('layout.layout')
@section('content');

    <section class="hero is-link">
        <div class = "hero-body">
            <p class = "title">
                Listado de Materia Prima
            </p>
            <a class = "button is-info" href="/materiaPrima/create">Agregar</a>
        </div>
    </section>

    <section class = "section">
        <div class = "table-container">

            <table class = "table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cantidad</th>
                        <th>Alto</th>
                        <th>Largo</th>
                        <th>Ancho</th>
                    </tr>
                <thead>

                <tfoot>
                    <tr>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cantidad</th>
                        <th>Alto</th>
                        <th>Largo</th>
                        <th>Ancho</th>
                    </tr>
                <tfoot>

                <tbody>
                    @forelse($materiaPrima as $materiaPrima)
                    <tr>
                        <td>{{ $materiaPrima->tipo }}<td>
                        <td>{{ $materiaPrima->nombre }}</td>
                        <td>{{ $materiaPrima->marca }}</td>
                        <td>{{ $materiaPrima->modelo }}</td>
                        <td>{{ $materiaPrima->cantidad }}</td>
                        <td>{{ $materiaPrima->alto }}</td>
                        <td>{{ $materiaPrima->largo }}</td>
                        <td>{{ $materiaPrima->ancho }}</td>
                        <td>
                            <form action="{{ route('materiaPrima.destroy', $computadora->id) }}" method = "POST">
                                <a class = "button is-info is-small" href="{{ route('materiaPrima.show', $materiaPrima->id }}">Ver</a>
                                <a class = "button is-info is-small" href="{{ route('materiaPrima.edit', $materiaPrima-id) }}">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger is-small">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>

                @empty
                    <h3>No hay datos en la base de datos</h3>
                @endforelse
            </table>
        </div>
    </section> <!-- /xd -->
@endsection
