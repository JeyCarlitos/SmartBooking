<!--Server side code to handle  Patient Registration-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_patient']))
		{
			$pat_fname=$_POST['pat_fname'];
			$pat_lname=$_POST['pat_lname'];
			$pat_number=$_POST['pat_number'];
            $pat_phone=$_POST['pat_phone'];
            $pat_type=$_POST['pat_type'];
            $pat_addr=$_POST['pat_addr'];
            $pat_age = $_POST['pat_age'];
            $pat_dob = $_POST['pat_dob'];
            $pat_ailment = $_POST['pat_ailment'];
            //sql to insert captured values
			$query="insert into his_patients (pat_fname, pat_ailment, pat_lname, pat_age, pat_dob, pat_number, pat_phone, pat_type, pat_addr) values(?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssss', $pat_fname, $pat_ailment, $pat_lname, $pat_age, $pat_dob, $pat_number, $pat_phone, $pat_type, $pat_addr);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Patient Details Added";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include("assets/inc/nav.php");?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigacion</li>

                            <li>
                                <a href="his_admin_dashboard.php">
                                    <i class="fe-airplay"></i>
                                    <span>  Tablero </span>
                                </a>
                                
                            </li>

                            <li>
                                <a id="NavPaciente" href="javascript: void(0);">
                                    <i class="fab fa-accessible-icon "></i>
                                    <span> Pasientes </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a id="NavPacientereg" href="his_admin_register_patient.php">Registrar Paciente</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_patients.php">View Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_patient.php">Manage Patients</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_discharge_patient.php">Discharge Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_transfer.php">Patient Transfers</a>
                                    </li>
                                </ul>
                            </li>
                        
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-doctor"></i>
                                    <span> Employees </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                   <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_employee.php">Add Employee</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_employee.php">View Employees</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_employee.php">Manage Employees</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_assaign_dept.php">Assign Department</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_transfer_employee.php">Transfer Employee</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-pill"></i>
                                    <span> Farmacia </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_pharm_cat.php">Add Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharm_cat.php">View Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharm_cat.php">Manage Pharm Category</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_pharmaceuticals.php">Add Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharmaceuticals.php">View Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_presc.php">Add Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_presc.php">View Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_presc.php">Manage Prescriptions</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-cash-multiple "></i>
                                    <span> Contabilidad </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_admin_add_acc.payable.php">Add Acc. Payable</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_acc_payable.php">Manage Acc. Payable</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_acc_receivable.php">Add Acc. Receivable</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_acc_receivable.php">Manage Acc. Receivable</a>
                                    </li>
                                    <hr>
                                    
                                    
                                </ul>
                            </li>
                            </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            
            <!-- Left Sidebar End -->

            <!--< ?php include("assets/inc/sidebar.php");?> ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Tablero</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">paciente</a></li>
                                            <li class="breadcrumb-item active">Añadir paciente</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Agregar detalles del paciente</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Rellene todos los campos</h4>
                                        <!--Add Patient Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Nombre</label>
                                                    <input type="text" required="required" name="pat_fname" class="form-control" id="inputEmail4" placeholder="Nombre del paciente">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Apellido</label>
                                                    <input required="required" type="text" name="pat_lname" class="form-control"  id="inputPassword4" placeholder="Apellido del paciente">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Fecha de nacimiento</label>
                                                    <input type="text" required="required" name="pat_dob" class="form-control" id="inputDate" placeholder="DD/MM/AAAA">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4" class="col-form-label">Edad</label>
                                                    <input required="required" type="text" name="pat_age" class="form-control"  id="inputAge" placeholder="Edad">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Correo</label>
                                                <input required="required" type="text" class="form-control" name="pat_addr" id="inputAddress" placeholder="Direccion del correo">
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputCity" class="col-form-label">Numero telefonico</label>
                                                    <input required="required" type="text" name="pat_phone" class="form-control" id="inputPhone">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputCity" class="col-form-label">Padecimiento</label>
                                                    <input required="required" type="text" name="pat_ailment" class="form-control" id="inputSick">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputState" class="col-form-label">Tipo de paciente</label>
                                                    <select id="inputState" required="required" name="pat_type" class="form-control">
                                                        <option>Elija</option>
                                                        <option>Paciente interno</option>
                                                        <option>Paciente externo</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2" style="display:none">
                                                    <?php 
                                                        $length = 5;    
                                                        $patient_number =  substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                                    ?>
                                                    <label for="inputZip" class="col-form-label">Número de paciente</label>
                                                    <input type="text" name="pat_number" value="<?php echo $patient_number;?>" class="form-control" id="inputZip">
                                                </div>
                                            </div>

                                            <button type="submit" name="add_patient" class="ladda-button btn btn-primary" data-style="expand-right">Add Patient</button>

                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('assets/inc/footer.php');?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>

        <!-- Loading buttons js -->
        <script src="assets/libs/ladda/spin.js"></script>
        <script src="assets/libs/ladda/ladda.js"></script>

        <!-- Buttons init js-->
        <script src="assets/js/pages/loading-btn.init.js"></script>
        
    </body>

</html>