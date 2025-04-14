<style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    .logo img {
        max-width: 150px;
        opacity: 0.9;
    }

    .encabezado {
        text-align: center;
    }

    .right-side {
        text-align: center;
        border: 1px solid black;
        font-size: 14px;
        padding: 5px;
    }

    .right-side p {
        letter-spacing: 1px;
    }

    h4,
    p,
    h3 {
        margin: 0;
    }

    table,
    tr,
    td,
    {
    width:100%;
    
    padding: 5px;
    margin-bottom: 20px;
    }
</style>

<table width="100%">
    <tr>
        <td style="width: 50%;">
            <div class="encabezado">
                <h4><strong>GESTOR EMPRESARIAL</strong></h4>
                <p>Listado de Clientes</p>
            </div>
        </td>
        <td style="width: 50%;">
            <div class="right-side">
                <h3>CONSOLIDADO DE CLIENTES</h3>
                <p>Fecha: {{ date('d/m/Y') }}</p>
                @php date_default_timezone_set('America/Bogota'); @endphp
                <p>Hora: {{ date('h:i:s A') }}</p>
            </div>
        </td>
    </tr>
</table>
