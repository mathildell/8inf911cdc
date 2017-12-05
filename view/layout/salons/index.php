<?php include 'view/layout/template.php'; ?>

<?php startblock('pageTitle'); ?>

   Salons

<?php endblock(); ?>

<?php 
  startblock('pageContent'); 
  
  if(isset($_GET["id"]) && !isset($_GET["action"])){
    include 'details.php';
  }else if(isset($_GET["id"]) && isset($_GET["action"])){
    include 'register.php';
  }else{
    include 'list.php';
  }
?>
  

<?php endblock(); ?>

<?php startblock('customScripts'); ?>
<script src="<?= $root; ?>/view/assets/js/vendor/chat/node_modules/socket.io/node_modules/socket.io-client/dist/socket.io.js"></script>
<script src="<?= $root; ?>/view/assets/js/vendor/chat/nodeClient.js"></script>
<script>
$( "#messageForm" ).submit( function(e) {
  e.preventDefault();

  var usersid = $( "#users_id" ).val();
  var salonsid = $( "#salons_id" ).val();
  var messageContent = $( "#messageContent" ).val();
  var username = $( "#senderUsername" ).val();
  var timestamp = $( "#senderTimestamp" ).val();
  var avatar = $( "#senderAvatar" ).val();
  
  socket.emit( 'message', { "users_id": usersid, "message": messageContent, "username": username, "timestamp": timestamp, "image": avatar } );

  $.ajax({
    data: { users_id: usersid, salons_id: salonsid, message: messageContent },
    url: "<?= $root; ?>/logic/sendMessage.php",
    type: "POST",
    success: function(data) {
      console.log(data);
    }
  });
  
  return false;
});
</script>
<?php endblock(); ?>
