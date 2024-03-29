<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header text-white">
            <i class="fa fa-money-bill me-4"></i>
            <span>PAYROLL</span>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item">
                    <a href="/" class='sidebar-link'>
                        <i class="fa fa-home text-yellow"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-building text-yellow"></i>
                        <span>Organization</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="/organizations/create">Add Organization</a>
                        </li>
                        <li>
                            <a href="/organizations">Manage Organization</a>
                        </li>
                        <li>
                            <a href="/departments/create">Add Department</a>
                        </li>
                        <li>
                            <a href="/departments">Manage Departments</a>
                        </li>
                        <li>
                            <a href="/designations/create">Add Designation</a>
                        </li>
                        <li>
                            <a href="/designations">Manage Designations</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="fa fa-table text-success"></i>
                <span>Designation</span>
                </a>
                <ul class="submenu ">
                   <li>
                      <a href="/designations/create">Add Designation</a>
                   </li>
                   <li>
                      <a href="/designations">Manage Designation</a>
                   </li>
                </ul>
             </li> --}}

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-users text-yellow"></i>
                        <span>Employees</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="/employees/create">Add Employee</a>
                        </li>
                        <li>
                            <a href="/employees">Manage Employees</a>
                        </li>
                        <li>
                            <a href="attendance">Record Attendance</a>
                        </li>
                        <li>
                            <a href="view_attendance">View Attendance List</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="fa fa-building text-success"></i>
                  <span>Attendance</span>
                </a>
                <ul class="submenu">
                  <li>
                    <a href="attendance">Record Attendance</a>
                  </li>
                  <li>
                    <a href="view_attendance">View Attendance</a>
                  </li>
                </ul>
              </li>
             </li> --}}
                {{-- <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="fa fa-building text-success"></i>
                  <span>Allowances</span>
                </a>
                <ul class="submenu">
                  <li>
                  <a href="/allowances/create">Add Allowance</a>
                  </li>
                  <li>
                  <a href="/allowances">Manage Allowance</a>
                  </li>
                </ul>
              </li>
             </li> --}}
                {{-- <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="fa fa-building text-success"></i>
                  <span>Deductions</span>
                </a>
                <ul class="submenu">
                  <li>
                    <a href="/deductions/create">Add Deduction</a>
                  </li>
                  <li>
                    <a href="/deductions">Manage Deductions</a>
                  </li>
                </ul>
              </li>
             </li> --}}
                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa fa-building text-yellow"></i>
                        <span>Allowances</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/allowances/create">Add Allowance</a>
                        </li>
                        <li>
                            <a href="/allowances">Manage Allowances</a>
                        </li>
                        <li>
                            <a href="/employee_allowances">Employee Allowances</a>
                        </li>
                        <li>
                            <a href="/employee_allowances/create">Assign Allowances</a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa fa-building text-yellow"></i>
                        <span>Deductions</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/deductions/create">Add Deduction</a>
                        </li>
                        <li>
                            <a href="/deductions">Manage Deductions</a>
                        </li>
                        <li>
                            <a href="/employee_deductions">Employee Deductions</a>
                        </li>
                        <li>
                            <a href="/employee_deductions/create">Assign Deductions</a>
                        </li>
                        <li>
                            <a href="/deductions/payetax">Pay As You Earn (PAYE)</a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class="sidebar-item has-sub">
                    <a href="#" class="sidebar-link">
                        <i class="fa fa-money-bill text-yellow"></i>
                        <span>Payroll</span>
                    </a>
                    <ul class="submenu">
                        <li class="sidebar-item">
                            <a href="/payrolls/create">Generate Payroll</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/payrolls">Manage Payroll</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/payroll_types">Payroll Types</a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="fa fa-table text-success"></i>
                <span>Leave Type</span>
                </a>
                <ul class="submenu ">
                   <li>
                      <a href="add_leave_type.html">Add Leave Type</a>
                   </li>
                   <li>
                      <a href="manage_leave_type.html">Manage Leave Type</a>
                   </li>
                </ul>
             </li>
             <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                <i class="fa fa-table text-success"></i>
                <span>Leave Management</span>
                </a>
                <ul class="submenu ">
                   <li>
                      <a href="all_leave.html">All Leaves</a>
                   </li>
                   <li>
                      <a href="pending_leave.html">Pending Leaves</a>
                   </li>
                   <li>
                      <a href="approve_leave.html">Approve Leaves</a>
                   </li>
                   <li>
                      <a href="not_approve_leave.html">Not Approve Leaves</a>
                   </li>
                </ul>
             </li> --}}
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-user text-yellow"></i>
                        <span>Users</span>
                    </a>
                    <ul class="submenu ">
                        <li>
                            <a href="/register">Add User</a>
                        </li>
                        <li>
                            <a href="/users">Manage Users</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item ">
                    <a href="/reports" class='sidebar-link'>
                        <i class="fa fa-chart-bar text-yellow"></i>
                        <span>Reports</span>
                    </a>
                </li>
            </ul>

        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

        <div class="mx-4 text-white h6 text-decoration-none">Powered By <a href="https://boldtechgh.com"
                class="text-decoration-none text-yellow">BoldtechGh</a>
        </div>
    </div>
</div>
