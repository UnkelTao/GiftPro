<?php
	class PublicAction extends Action {

		Public function code(){
   			 import('ORG.Util.Image');
    			Image::buildImageVerify(4,1,png,125,33,'verify');
		}

	}
?>