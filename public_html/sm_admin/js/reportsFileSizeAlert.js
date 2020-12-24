const maxReportFileSize = 31457280;
const alertText = 'Max report file size of 30MiB allowed!';

$('#reportFileInput').bind('change', function() {
    if (this.files[0].size > maxReportFileSize ) {
        alert(alertText);
        this.value = "";
    }
});