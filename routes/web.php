<?php
require_once __DIR__ . '/../config/names.php';

return [
  // Auth
  $rootLocation.'/login' => 'app/auth/login.php',
  $rootLocation.'/register' => 'app/auth/register-account.php',
  $rootLocation.'/logout' => 'util/logout.inc.php',
  
  // Sample Page
  $rootLocation.'/sample' => 'app/modules/sample/sample.php',

  // Accounts
  $rootLocation.'/accounts-create' => 'app/modules/users/create-account.php',
  $rootLocation.'/accounts-edit' => 'app/modules/users/edit-account.php',
  $rootLocation.'/accounts-manage' => 'app/modules/users/manage-account.php',
  $rootLocation.'/accounts-view' => 'app/modules/users/view-account.php',
  
  // Home
  $rootLocation.'/home' => 'app/views/home.php',

  // Dashboard
  $rootLocation.'/dashboard' => 'app/modules/main-dashboard.php',

  // HR12
  $rootLocation.'/hr/recruitment-and-applicant' => 'app/modules/human resources/rec-app-mgmt.php',
  $rootLocation.'/hr/performance' => 'app/modules/human resources/perform-mgmt.php',
  $rootLocation.'/hr/training' => 'app/modules/human resources/lrn-trn-mgmt.php',
  $rootLocation.'/hr/employee-self-service' => 'app/modules/human resources/new-hire-mgmt.php',
  $rootLocation.'/hr/succession' => 'app/modules/human resources/succession.php',
  $rootLocation.'/hr/social-recognition' => 'app/modules/human resources/social-rec.php',
  $rootLocation.'/hr/competency' => 'app/modules/human resources/comp-mgmt.php',

  // HR34
  $rootLocation.'/hr/core-human' => 'app/modules/human resources/core-human.php',
  $rootLocation.'/hr/attendance' => 'app/modules/human resources/time-attendance.php',
  $rootLocation.'/hr/claims-and-reimbursement' => 'app/modules/human resources/claims-reimburse.php',
  $rootLocation.'/hr/compensation-planning' => 'app/modules/human resources/comp-planning.php',
  $rootLocation.'/hr/analytics' => 'app/modules/human resources/hr-analytics.php',
  $rootLocation.'/hr/leave' => 'app/modules/human resources/leave-mgmt.php',
  $rootLocation.'/hr/payroll' => 'app/modules/human resources/payroll.php',

  // Log1
  $rootLocation.'/logistics/project' => 'app/modules/logistics/project-mgmt.php',
  $rootLocation.'/logistics/warehousing' => 'app/modules/logistics/warehousing.php',
  $rootLocation.'/logistics/procurement' => 'app/modules/logistics/procurement.php',
  $rootLocation.'/logistics/asset' => 'app/modules/logistics/asset-mgmt.php',

  // Log2
  $rootLocation.'/logistics/vendor-portal' => 'app/modules/logistics/vendor-portal.php',
  $rootLocation.'/logistics/documents' => 'app/modules/logistics/document-tracking.php',
  $rootLocation.'/logistics/vehicle-reservation' => 'app/modules/logistics/vehicle-reservation.php',
  $rootLocation.'/logistics/fleet' => 'app/modules/logistics/fleet-mgmt.php',
  $rootLocation.'/logistics/audit' => 'app/modules/logistics/audit-mgmt.php',
  
  // Core1
  $rootLocation.'/core/patient-registration' => 'app/modules/core transactions/patient-reg.php',
  $rootLocation.'/core/appointment' => 'app/modules/core transactions/doc-appointment.php',
  $rootLocation.'/core/in-out-patient' => 'app/modules/core transactions/in-out-patient-mgmt.php',
  $rootLocation.'/core/medical-data' => 'app/modules/core transactions/medical-package-mgmt.php',
  $rootLocation.'/core/billing-and-discharge' => 'app/modules/core transactions/billing-discharge-mgmt.php',
  
  // Core2
  $rootLocation.'/core/out-treatment' => 'app/modules/core transactions/out-treatment.php',
  $rootLocation.'/core/hmo-insurance' => 'app/modules/core transactions/hmo-insurance.php',
  $rootLocation.'/core/surgery-scheduler' => 'app/modules/core transactions/surgery-sched.php',
  $rootLocation.'/core/diet' => 'app/modules/core transactions/diet-mgmt.php',
  $rootLocation.'/core/laboratory' => 'app/modules/core transactions/lab-mgmt.php',
  
  // Core3
  $rootLocation.'/core/bed-linen' => 'app/modules/core transactions/bed-linen-mgmt.php',
  $rootLocation.'/core/homis-analytics' => 'app/modules/core transactions/homis-analytics.php',
  $rootLocation.'/core/pharmacy' => 'app/modules/core transactions/pharmacy.php',
  $rootLocation.'/core/medical-package' => 'app/modules/core transactions/medical-package-mgmt.php',
  
  // Fin
  $rootLocation.'/financials/budget' => 'app/modules/financials/budget-mgmt.php',
  $rootLocation.'/financials/collection' => 'app/modules/financials/collection.php',
  $rootLocation.'/financials/disbursement' => 'app/modules/financials/disbursement.php',
  $rootLocation.'/financials/general-ledger' => 'app/modules/financials/general-ledger.php',
  $rootLocation.'/financials/payables-receivables' => 'app/modules/financials/payable-receivable.php',
];
