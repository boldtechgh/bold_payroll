<?php

namespace App\Mail;

use App\Models\Employee;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PayrollEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $payrollData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payrollData)
    {
        //
        $this->payrollData = $payrollData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $employeeEmail = $this->payrollData['email'];
        return $this->subject('Payroll Statement')
                    ->to($employeeEmail)
                    ->view('emails.payroll');
    }
}
