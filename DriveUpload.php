$fileMetadata = new Google_Service_Drive_DriveFile(array(
    'name' => 'My Report',
    'mimeType' => 'application/vnd.google-apps.spreadsheet'));
$content = file_get_contents('files/report.csv');
$file = $driveService->files->create($fileMetadata, array(
    'data' => $content,
    'mimeType' => 'text/csv',
    'uploadType' => 'multipart',
    'fields' => 'id'));
printf("File ID: %s\n", $file->id);