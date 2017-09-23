
// source https://projectzme.wordpress.com/
//     2012/03/19/captive-portal-using-php-and-iptables-firewall-on-linux/
<?php if( isset( $POST['ip'] ) && isset ( $_POST['mac'] ) ) {
  $ip = $_POST['ip']; 
  $mac = $_POST['mac']; 
   exec("sudo iptables -I internet 1 -t mangle -m mac --mac-source $mac -j RETURN"); 
   exec("sudo rmtrack " . $ip); 
   sleep(1); // allowing rmtrack to be executed 
   // OK, redirection bypassed. 
   // Show the logged in message or directly redirect to other website 
   echo "User logged in."; 
   exit; 
} else { 
  echo "Access Denied"; 
  exit; 
} ?>
