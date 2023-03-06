<?php
interface DownloadableReport {
    public function get_name(): string;
    public function get_header(): array;
}

class UserReport implements DownloadableReport{
    public function get_name(): string 
    {
        return "user-report";
    }
    public function get_header(): array 
    {
        return ["header/json"];
    }
}

class AuditReport implements DownloadableReport{
    public function get_name(): string 
    {
        return "audit-report";
    }
    public function get_header(): array 
    {
        return ["header/xml"];
    }
}

class DownloadReportService {
    public function downloadPdf(DownloadableReport $report) {
        $name = $report->get_name();
        print("name of report being downloaded is: $name\n");
    }
}

$userreport = new UserReport();
$auditreport = new AuditReport();

$download = new DownloadReportService();
$download->downloadPdf($userreport);
$download->downloadPdf($auditreport);
?>