<?php
require('components/header.php');
require_once('../model/policyModel.php');
$viewPolicy = policyView();
$logInfo = $_SESSION['logInfo'];
$headname="Privacy & Policy";
?>

<html lang="en">
<head>
    <title>Policy</title>
</head>
<body>
<table border="1" width="100%">
  <tr>
      <td><?php echo Head($logInfo['username'],$headname); ?></td>
  </tr>
</table>
<table>
    <tr>
        <td>
             <?php echo $viewPolicy['policy']; ?>
        </td>
    </tr>
</table>
</body>
</html>