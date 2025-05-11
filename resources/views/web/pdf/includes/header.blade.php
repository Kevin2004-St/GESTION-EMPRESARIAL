<style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    .header-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .logo {
        text-align: left;
        padding-left: 10px;
    }

    .logo img {
        max-width: 120px;
        opacity: 0.95;
    }

    .encabezado {
        text-align: center;
    }

    .encabezado h4 {
        font-size: 18px;
        margin-bottom: 4px;
        letter-spacing: 0.5px;
    }

    .encabezado p {
        font-size: 14px;
        color: #4b5563; /* gris suave */
    }

    .right-side {
        text-align: right;
        font-size: 13px;
        padding-right: 10px;
        border-left: 2px solid #d1d5db;
    }

    .right-side h3 {
        margin-bottom: 6px;
        font-size: 16px;
        color: #1f2937; /* gris oscuro */
    }

    .right-side p {
        margin: 2px 0;
    }
</style>

<table class="header-table">
    <tr>
        <td style="width: 25%;">
            <div class="logo">
                <img src="{{ public_path('img/logo-login.webp') }}" alt="Logo">
            </div>
        </td>
        <td style="width: 50%;">
            <div class="encabezado">
                <h4><strong>GESTOR EMPRESARIAL</strong></h4>
                <p>{{ $name ?? 'Consolidado general' }}</p>
            </div>
        </td>
        <td style="width: 25%;">
            <div class="right-side">
                <h3>Consolidado</h3>
                <p>Fecha: {{ date('d/m/Y') }}</p>
                @php date_default_timezone_set('America/Bogota'); @endphp
                <p>Hora: {{ date('h:i:s A') }}</p>
            </div>
        </td>
    </tr>
</table>
