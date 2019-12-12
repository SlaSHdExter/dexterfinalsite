<?php
include '../core/clientC.php';
  $clientC = new clientC();
  $result = $clientC->rechercherMail($_GET['email']);
             foreach($result as $row){ 
             	
?>
<script>
  location.replace("mail/sendmail.php?email=<?php echo $row['email'];  ?>&sujet=forget password&text=<?php echo $row['password'];  ?>")
</script>
<?php
             }
?>