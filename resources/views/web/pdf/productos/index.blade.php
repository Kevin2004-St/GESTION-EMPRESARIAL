<style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    body {
        font-size: 11px;
    }

    .encabezado {
        text-align: center;
        font-size: 16px;
    }

    .right-side {
        text-align: center;
        border: 1px solid #000;
        font-size: 11px;
        padding: 6px;
        border-radius: 5px;
    }

    .right-side p {
        margin: 4px 0;
        letter-spacing: 0.5px;
    }

    h3, h4 {
        margin: 5px 0;
    }

    /* Tabla principal */
    .cabecera {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        margin-top: 20px;
    }

    thead {
        background-color: #f0f0f0;
    }

    th, td {
        border: 1px solid #000;
        padding: 6px;
        word-wrap: break-word;
        text-align: center;
    }

    th {
        font-weight: bold;
    }

    /* Anchos ajustados */
    th:nth-child(1), td:nth-child(1) { width: 15%; }
    th:nth-child(2), td:nth-child(2) { width: 15%; }
    th:nth-child(3), td:nth-child(3) { width: 15%; }
    th:nth-child(4), td:nth-child(4) { width: 20%; }
    th:nth-child(5), td:nth-child(5) { width: 15%; }
    th:nth-child(6), td:nth-child(6) { width: 10%; }
</style>


@include('web.pdf.includes.header', ['name' => 'Listado de productos'])
<table class="cabecera">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>PRECIO UNITARIO</th>
            <th>STOCK</th>
            <th>ESTADO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entities as $entity)
        <tr>
        <td> {{ $entity->nombre }}</td>
        <td>{{ $entity->descripcion ? $entity->descripcion : 'Sin descripción'  }} </td>
        <td>{{ number_format($entity->precio_unitario, 0, ',', '.') }}</td>
        <td>{{ $entity->stock ? $entity->stock: 'Sin unidades' }}</td>
        <td> {{ $entity->estado ? 'Disponible' : 'No Disponible' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@include('web.pdf.includes.footer')
