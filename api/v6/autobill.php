<?php
header('Content-Type: application/json');

echo json_encode([
 "generated"=>"4120 invoices",
 "collections_followup"=>"sent",
 "exceptions"=>"12 flagged"
]);
