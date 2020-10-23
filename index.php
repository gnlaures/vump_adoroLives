<?php
	include("components/_head.php");
	include("components/l_nav.php");

	include($file);

	// modais
	include("components/m_z_maskCloseModal.php");
	include("components/m_shareOptions.php");
	include("components/m_userRegister.php");
	include("components/m_userDeleteLive.php");
	include("components/m_userNewPassword.php");
	include("components/m_userRecoveryPass.php");

	// end
	include("components/_end.php");
?>