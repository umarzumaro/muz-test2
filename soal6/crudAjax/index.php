<!DOCTYPE html>
<html>

<head>
    <title> CRUD Dengan AJAX JQuery PHP MySQL</title>

    <!-- style bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">


    <!-- style javascript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>


</head>

<body>

    <nav class="navbar   mb-3">
        <div class="container">
            <h1 class="">Arkademy</h1>
            <h1 class="txt-cp">COFFE SHOP</h1>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="btn btn-success" data-toggle="modal" data-target="#create-user">ADD</button>
                </li>

            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="panel panel-primary">

            <div class="panel-body">
                <table class="table mt-5 ">
                    <thead class="thead tbl">
                        <tr>
                            <th>No</th>
                            <th>Cashier</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="barisData">

                    </tbody>
                </table>

            </div>
        </div>

        <!-- Modal untuk tambah user -->
        <div class="modal fade" id="create-user" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
                    </div>

                    <div class="modal-body">
                        <form data-toggle="validator" action="api/create.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="user_name">Nama</label>
                                <input type="text" name="user_name" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="user_email">Email</label>
                                <input type="email" name="user_email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="user_address">Alamat</label>
                                <input type="text" name="user_address" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn crud-submit btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk edit user -->
        <div class="container">
            <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit User</h4>
                        </div>
                        <div class="modal-body">
                            <form data-toggle="validator" action="api/update.php" method="put">
                                <input type="hidden" name="user_id" class="user_id">
                                <div class="form-group">
                                    <label class="control-label" for="user_name">Nama</label>
                                    <input type="text" name="user_name" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="user_email">Email</label>
                                    <input type="email" name="user_email" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="user_address">Alamat</label>
                                    <input type="text" name="user_address" class="form-control" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success crud-edit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    data: "",
                    url: 'api/read.php',
                    success: function(result) {

                        console.log(result);

                        let objResult = JSON.parse(result);
                        let nomor = 1;
                        $.each(objResult, function(key, val) {
                            let barisBaru = $("<tr>");
                            barisBaru.html(`
                            
                            <td>${nomor}</td>
                            <td>${val.nama_csr}</td>
                            <td>${val.nama_prd}</td>
                            <td>${val.nama_ctr}</td>
                            <td>${val.price}</td>
                            <td>
                            <button  class="btn btn-link" data-toggle="modal" data-target="#modal-edit">edit</button> | <button class="btn btn-outline-link-danger" data-toggle="modal" data-target="#delete">delete</button>
                            </td>

                        `)
                            let dataHandler = $(".barisData");
                            dataHandler.append(barisBaru);
                            nomor++;
                        })
                    }
                })


                /* Edit user */
                $("body").on("click", ".modal-edit", function() {
                    console.log('test');
                });


                /* tambah user */
                $(".crud-submit").click(function(e) {
                    e.preventDefault();
                    var form_action = $("#create-user").find("form").attr("action");
                    var user_name = $("#create-user").find("input[name='user_name']").val();
                    var user_email = $("#create-user").find("input[name='user_email']").val();
                    var user_address = $("#create-user").find("input[name='user_address']").val();

                    if (user_name != '' && user_email != '' && user_address != '') {
                        $.ajax({
                            dataType: 'json',
                            type: 'POST',
                            url: url + form_action,
                            data: {
                                user_name: user_name,
                                user_email: user_email,
                                user_address: user_address
                            }
                        }).done(function(data) {
                            $("#create-user").find("input[name='user_name']").val('');
                            $("#create-user").find("input[name='user_email']").val('');
                            $("#create-user").find("input[name='user_address']").val('');
                            getPageData();
                            $(".modal").modal('hide');
                            alert('Data berhasil ditambah')
                        });
                    } else {
                        alert('Ada data yang kosong')
                    }


                });

            });
        </script>
</body>

</html>