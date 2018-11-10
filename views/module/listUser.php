<?php
//Consulta la base de datos los usuarios
$registros = Datos::allFromTable('usuarios');
?>

                      <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Usuarios</h2>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Sorting</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <div id="sorting-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                              <table id="sorting-table" class="table mb-0 dataTable no-footer" role="grid" aria-describedby="sorting-table_info">
                                                <thead>
                                                    <tr role="row">
                                                      <th class="sorting" style="width: 40px;">ID</th>
                                                      <th class="sorting" style="width: 143px;">Customer Name</th>
                                                      <th class="sorting" style="width: 74px;">Actions</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                                                  foreach($registros as $d):
                                                  ?>
                                                <tr role="row" class="odd">
                                                  <td><span class="text-primary"><?php echo $d['id']; ?></span></td>
                                                  <td><?php echo $d['nombre']; ?></td>
                                                  <td class="td-actions">
                                                    <a href="index.php?action=editUser&id=<?php echo $d['id']; ?>"><i class="la la-edit edit"></i></a>
                                                    <a href="index.php?action=eraseUser&id=<?php echo $d['id']; ?>"><i class="la la-close delete"></i></a>
                                                  </td>
                                                </tr>
                                                  <?php
                                                  endforeach;
                                                  ?>
                                              </tbody>
                                            </table>
                                          </div>
                                          <!-- End Sorting -->
                                      </div>
                                  </div>
                                  <!-- End Row -->
                              </div>