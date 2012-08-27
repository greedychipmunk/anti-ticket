<?php echo $this->load->view( 'templates/header' ); ?>
<div id="contentarea">
    <div id="leftbar">
        <h2>Sign In...</h2>
        <?php
            $attr = array( 'id' => 'signin', 'class' => 'signin' );
            echo form_open( 'user/signin', $attr );
            echo form_label( 'Email:', 'email' );
            echo form_input( 'email' );
            echo form_label( 'Password:', 'pwd' );
            echo form_password( 'pwd' );
            echo form_submit( 'submit_signin', 'Go!' );
            echo form_close();
        ?>
        <br />
        <h2>or register</h2>
        <br />
        <a href="#">more ></a><br />
        <br />
    </div>
    <div id="rightbar">
        <h2>latest news</h2>
        <p><span class="orangetext">12/08/2006</span><br />
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Utid anisl nec leo congue fringilla. <br />
        <br />
        <span class="orangetext">10/08/2006</span><br />
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Utid anisl nec leo congue fringilla. <br />
        <br />
        <span class="orangetext">28/07/2006</span><br />
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Utid anisl nec leo congue fringilla. </p>
    </div>
</div>
<?php echo $this->load->view( 'templates/footer' ); ?>