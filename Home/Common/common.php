<?php
	          function checkV($verify) {
                        if (md5($verify) != $_SESSION['verify']) return false;
                        return true;
                    }       
?>