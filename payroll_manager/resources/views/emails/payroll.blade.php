@if(isset($payrollData))
    <p>Hello {{ $payrollData['employee_name'] }},</p>
    <p>Your payroll statement for the month is as follows:</p>
    <ul>
        <li>Allowance: {{ $payrollData['total_allowance'] }}</li>
        <li>Deduction: {{ $payrollData['total_deduction'] }}</li>
        <li>Salary: ${{ $payrollData['paye_tax'] }}</li>
        <li>Bonus: ${{ $payrollData['net_salary'] }}</li>
    </ul>
@else
    <p>Error: Payroll data not available.</p>
@endif
