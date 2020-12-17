const maxReportFileSize = 2097152;
const alertText = 'Max report file size of 2MiB allowed!';

$('#reportFileInput').bind('change', function() {
    if (this.files[0].size > maxReportFileSize ) {
        alert(alertText);
        this.value = "";
    }
});