<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<div class="dashboard__contenedor--boton">
    <a href="/admin/eventos/crear" class="dashboard__boton">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Evento
    </a>
</div>

<div class="dashboard__contenedor">
    <?php if (!empty($eventos)) : ?>
        <!-- <table id="myTable" class="display nowrap" width="100%">
            <thead class="table__thead">
                <tr class="table__tr">
                    <th class="table__th">Nombre</th>
                    <th class="table__th">Ubicación</th>
                    <th class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach ($ponentes as $ponente) : ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php  echo $ponente->Nombre . " " . $ponente->Apellido ?>
                        </td>
                        <td class="table__td">
                            <?php  echo $ponente->Ciudad . " - " . $ponente->Pais ?>
                        </td>
                        <td class="table__td--acciones">
                            <a class="table__accion table__accion--editar" href="/admin/ponentes/editar?Id=<?php  echo $ponente->Id ?>">
                                <i class="fa-solid fa-user-pen"></i>
                                Editar
                            </a>
                            <form method="post" action="/admin/ponentes/eliminar">
                                <input type="hidden" name="Id" value="<?php  echo $ponente->Id ?>">
                                <button class="table__accion table__accion--eliminar" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php  endforeach; ?>
            </tbody>
        </table> -->

        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th class="table__th">Evento</th>
                    <th class="table__th">Categoria</th>
                    <th class="table__th">Dia y Hora</th>
                    <th class="table__th">Ponente</th>
                    <th class="table__th"></th>
                </tr>
            </thead>
            <tbody class="table__tbody">
                <?php foreach ($eventos as $evento): ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $evento->Nombre?>
                        </td>
                        <td class="table__td">
                            <?php echo $evento->Categoria->Nombre?>
                        </td>
                        <td class="table__td">
                            <?php echo $evento->Dia->Nombre . " / " . $evento->Hora->Hora ?>
                        </td>
                        <td class="table__td">
                            <?php echo $evento->Ponente->Nombre . " " . $evento->Ponente->Apellido?>
                        </td>
                        <td class="table__td--acciones">
                            <a 
                                class="table__accion table__accion--editar"
                                href="/admin/eventos/editar?Id=<?php echo $evento->Id ?>">
                                <i class="fa-solid fa-pencil"></i>
                                Editar
                            </a>
                            <form method="post" action="/admin/eventos/eliminar">
                                <input type="hidden" name="Id" value="<?php echo $evento->Id?>">
                                <button
                                class="table__accion table__accion--eliminar"
                                type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    <?php else : ?>
        <p class="text-center">No Hay Eventos Aún</p>
    <?php endif; ?>
</div>
<?php 
    echo $paginacion; //solo descomentar para usar paginacion del curso y no datatables
?>

<?php

$script = '
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
<script src="/build/js/datatables.js"></script>
'

?>