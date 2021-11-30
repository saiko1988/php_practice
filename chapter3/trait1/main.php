<?php declare(strict_types=1) ?>
<body>
    <pre>
<?php
require_once __DIR__ . '/MemberModel.php';
$memberModel = new MemberModel();
$memberModel->create('001');
$memberModel->delete('001');
echo nl2br(file_get_contents('MemberModel.log'));
?>
    </pre>
</body>