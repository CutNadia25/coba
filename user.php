 <?php
    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user");
    while ($record = mysqli_fetch_array($query)) {
        $result[] = $record;
    }
    ?>



 <div class="col-lg-9 mt-2">
     <div class="card">
         <div class="card-header">
             Halaman User
         </div>
         <div class="card-body">
             <div class="row">
                 <div class="col d-flex justify-content-end">
                     <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Tambah User</button>
                 </div>
             </div>
             <!--modal tambah user baru-->
             <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                             <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="POST">
                                 <div class="row">
                                     <div class="col-lg-6">
                                         <div class="form-floating mb-3">
                                             <input type="text" class="form-control" id="floatingInput" placeholder="Nama Kamu" name="nama" required>
                                             <label for="floatingInput">Nama</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Nama
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-6">
                                         <div class="form-floating mb-3">
                                             <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" required>
                                             <label for="floatingInput">Username</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan Username
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-lg-4">
                                         <div class="form-floating mb-3">
                                             <select class="form-select" aria-label="Default select example" name="level" required>
                                                 <option selected hidden value="0">Pilih Level User</option>
                                                 <option value="1">Admin</option>
                                                 <option value="2">Pelayan</option>
                                                 <option value="3">Pelanggan</option>
                                                 <option value="4">Kurir</option>
                                             </select>
                                             <label for="floatingInput">Level User</label>
                                             <div class="invalid-feedback">
                                                 Harap Pilih Level User
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-lg-8">
                                         <div class="form-floating mb-3">
                                             <input type="number" class="form-control" id="floatingInput" placeholder="08xxxxxxxxx" name="nohp" required>
                                             <label for="floatingInput">No HP</label>
                                             <div class="invalid-feedback">
                                                 Harap Masukkan No HP.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-lg-12">
                                         <div class="form-floating mb-3">
                                             <input type="password" class="form-control" id="floatingInput" placeholder="Password" disabled value="12345" name="password">
                                             <label for="floatingPassword">Password</label>
                                         </div>
                                     </div>
                                 </div>
                         </div>
                         <div class="form-floating">
                             <textarea class="form-control" id="" style="height: 100px" name="alamat"></textarea>
                             <label for="floatingInput">Alamat</label>
                         </div>
                         <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" class="btn btn-primary" name="input_user_valid" value="12345">Save changes</button>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <!--end modal tambah user baru-->

         <!--modal view-->
         <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h1 class="modal-title fs-5" id="exampleModalLabel">Data User</h1>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         ...
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                         <button type="button" class="btn btn-primary">Save changes</button>
                     </div>
                 </div>
             </div>
         </div>
         <!--end modal view-->

         <?php
            if (empty($result)) {
                echo "Data user tidak ada";
            } else {
            ?>
             <div class="table-responsive">
                 <table class="table table-striped table-hover">
                     <thead>
                         <tr>
                             <th scope="col">No</th>
                             <th scope="col">Nama</th>
                             <th scope="col">Username</th>
                             <th scope="col">Level</th>
                             <th scope="col">No.HP</th>
                             <th scope="col">Aksi</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($result as $row) {

                            ?>

                             <tr>
                                 <th scope="row"><?php echo $no++ ?></th>
                                 <td><?php echo $row['nama'] ?></td>
                                 <td><?php echo $row['username'] ?></td>
                                 <td><?php echo $row['level'] ?></td>
                                 <td><?php echo $row['nohp'] ?></td>
                                 <td class="d-flex">
                                     <button class="btn btn-info btn-sm me-2" data-bs-toggle="modal" data-bs-target="#ModalView"><i class="bi bi-eye-fill"></i></button>
                                     <button class="btn btn-warning btn-sm me-2"><i class="bi bi-pencil-square"></i></button>
                                     <button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                 </td>
                             </tr>
                         <?php
                            }
                            ?>
                     </tbody>
                 </table>
             </div>
         <?php
            }
            ?>
     </div>
 </div>
 </div>

 <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

