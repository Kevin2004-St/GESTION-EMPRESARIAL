<style>
    body {
        position: relative;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .footer {
        position: absolute;
        bottom: 20px;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 12px;
        color: #6b7280; /* gris suave */
    }

    .footer p {
        margin: 0;
        line-height: 1.5;
    }

    .footer .divider {
        width: 60%;
        height: 1px;
        background-color: #e5e7eb; /* línea gris clara */
        margin: 0 auto 8px auto;
    }

    .footer .author {
        font-weight: bold;
        color: #374151; /* gris más oscuro */
    }
</style>

<div class="footer">
    <div class="divider"></div>
    <p>Gestor Empresarial | Consolidado generado automáticamente</p>
    <p class="author">Por Kevin Fernandez</p>
    <p>&copy; <?php echo date('Y'); ?> Todos los derechos reservados.</p>
</div>
