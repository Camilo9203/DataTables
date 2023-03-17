<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- jQuery UI JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Datatable JS -->
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!-- Datatable Boostrap5 -->
    <script src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <!-- Script -->
    <script src="js/app.js"></script>
</head>
<body>
    <main>
        <div class="container">
            <div class="alert alert-primary" role="alert">
                Datatables con rango de fechas
            </div>
            <!-- Date Filter -->
            <form id="formFecha">
                <table>
                    <tr>
                        <td>
                            <input type='text' readonly id='buscar_inicio' class="datepicker" placeholder='Fecha Inicio'class="form-control form-control-sm">
                        </td>
                        <td>
                            <input type='text' readonly id='buscar_fin' class="datepicker" placeholder='Fecha fin' class="form-control form-control-sm">
                        </td>
                        <td>
                            <input type='button' id="btn_search" value="Buscar" class="btn btn-primary btn-sm">
                        </td>
                        <td>
                            <input type='button' id="btnLimpiar" value="Limpiar" class="btn btn-danger btn-sm">
                        </td>
                    </tr>
                </table>
            </form>
            <hr>
            <!-- Table -->
            <table id='table_personal' class="table table-striped" style="width:100%">
                <thead>
                <tr>
                    <th>Nombre personal</th>
                    <th>Email</th>
                    <th>Salario</th>
                    <th>Ciudad</th>
                    <th>Fecha de ingreso</th>
                </tr>
                </thead>
            </table>
        </div>
    </main>
<script>
    $("#btnLimpiar").click(function(event) {
        $("#formFecha")[0].reset();
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>