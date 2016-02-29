<?php
/* @var $this PublicController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html"; />
        <meta charset="utf-8" />
        <title>Admin</title>
		
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon" />
		
		<link href="/assets/css/adminlogin.css" rel="stylesheet" type="text/css"/>
		
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body>
        
            <div id="login" class="login loginpage">
                <h1>ADMIN</h1>

				<?php
				$form = $this->beginWidget('CActiveForm', array(
					'id' => 'login-form',
					'enableClientValidation' => true,
					'clientOptions' => array(
						'validateOnSubmit' => true,
					),
				));
				?>
				
				<div class="form-group">
					<?php echo $form->labelEx($model,'账号：', array('for'=>'username') ); ?>
					<?php echo $form->textField($model,'username', array('class'=>'input') ); ?>
					<?php echo $form->error($model,'username', array('class'=>'tipText tipError'), true ); ?>
				</div>
				<div class="form-group">
					<?php echo $form->labelEx($model,'密码：', array('for'=>'user_pass') ); ?>
					<?php echo $form->passwordField($model,'password', array('class'=>'input') ); ?>
					<?php echo $form->error($model,'password', array('class'=>'tipText tipError'), false); ?>
				</div>
				
				<p class="submit">
					<input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-block" value="登录">
				</p>
				
				<?php $this->endWidget(); ?>
				
            </div>
		
    </body>
</html>



<style>
html {

}
body {
	background-color: #f1f2f7;
	font-size: 15px;
	overflow: hidden;
}

#login {
	width: 500px;
	height:500px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -250px 0 0 -250px;
}

h1 {
	height: 60px;
	font-family: 'Open Sans', Arial, Helvetica, sans-serif;
	font-weight: 300;
	color: #505458;
}

#login-form label {
	color: black;
}

#login-form .input {
	width: 95%;
	padding: 9px;
	margin: 10px 0 2px 0;
}

.tipError {
	height:15px;
	margin-top:3px;
	color: #C00;
}

.submit {
	margin-top:30px;
}

input:focus{
	outline:none;
}

#login h1{
	text-align:center;
}

.btn {
	width: 100%;
	padding: 11px 23px;
	font-size: 19px;
	border-radius: 0px;
	border:0px;

	background: rgba(31, 181, 172, 1.0);
	color: #ffffff;
	cursor: pointer;
}

.form-group {
	height:80px;
	margin: 20px 0 5px 0;
}

</style>