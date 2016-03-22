<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
                          <?php
                          echo sha1('12345');
					    $form = $this->beginWidget('CActiveForm', array(
					        'enableClientValidation' => true,
					        'clientOptions' => array(
					            'validateOnSubmit' => true,
					        ),
					    	'htmlOptions'=> array('class'=>'form-signin')
					    ));
					    ?>	
                <span id="reauth-email" class="reauth-email"></span>
                <?php echo $form->textField($model, 'username', array('class'=>'form-control', 'placeholder'=>'Username', 'required autofocus')); ?>
                <?php echo $form->error($model, 'username'); ?>
				<?php echo $form->passwordField($model, 'password', array('class'=>'form-control', 'placeholder'=>'Password', 'required')); ?>
                <?php echo $form->error($model, 'password'); ?>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <?php $this->endWidget(); ?><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->