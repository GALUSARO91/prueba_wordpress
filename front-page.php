<?php get_header(); ?>

<main>
        
        <section class="content">
                <article>
                <a href="#" class="crumbtrail">Link</a>
                <h1>Maecenas ante leo, dictum sed dolor nec, consequat facilisis tortor</h1>
                <figure>
                    <img src="https://i0.wp.com/radioformulaqr.com/wp-content/uploads/2019/05/flamencos.jpg" alt="feature image">
    
                </figure>
            </article>
        
        <section>
            <h3>This is NOICELAND.</h3>
            <p>Maecenas ante leo, dictum sed dolor nec, consequat facilisis tortor. In porta urna sit amet mauris auctor, sollicitudin suscipit nisi lobortis. Aliquam id justo lacus. Sed imperdiet vehicula euismod. Vestibulum sed neque tincidunt, convallis purus vel, condimentum purus. Etiam blandit, tellus eget rutrum lacinia, dolor risus molestie diam, vitae elementum eros purus sit amet sem</p>
            <p>Integer ac mi euismod, vestibulum arcu maximus, consequat ligula. Maecenas scelerisque, turpis eget ultricies bibendum, nibh urna condimentum est, porta volutpat purus lectus sit amet eros.</p>
            <P>Sed sagittis ipsum leo, et vulputate risus porttitor eget. Cras nec pellentesque dui. In hac habitasse platea dictumst. Pellentesque justo felis, sodales at hendrerit sed, volutpat non neque. Praesent ullamcorper nulla sapien, ut consectetur lectus dictum non. Sed non est id nisi maximus vulputate a quis nibh. Curabitur consequat vitae est interdum ullamcorper. Curabitur ultricies non ex et scelerisque. Mauris sollicitudin varius est eu interdum.</P>
            <p><a href="">Contact us</a></p>
        </section>
            
        </section>

        <section>
            <h3>Our Team</h3>
            <article class="team">

                <?php 
                $users = get_users();
                foreach($users as $user){ ?>
                <div class="user">
                <figure>

                <?php $avatar = get_avatar($user->id);
                echo $avatar;?>
                <figcaption class="name"><?php echo $user->display_name; ?></figcaption>
                <figcaption class="title"> <?php echo $user->user_email?></figcaption>
                </div>
               <?php  } ?>
               

            </article>

</section>

<section>
    <h3>Wanna get in touch?</h3>
    <p>Curabitur vel lacus pharetra, auctor magna ac, sodales mi. Curabitur fermentum nulla vel mauris pretium vulputate. Curabitur eu tempor erat. Nam at elit ultrices, fermentum erat at, pellentesque ex.</p>
    <div class="contact">
        
        <ol>
            <li>
                <span class="counter"></span>
                <h4>ADDRESS</h4>
                 <p>144 N 7th Str. #536 Brookly, NY 11249 United States </p>
            </li>
        
            <li>
                <span class="counter"></span>
                <h4>General Inquiries</h4>
                <p>hello@noiceland.co</p>
            </li>
        
            <li>
                <span class="counter"></span>
                <h4>Press Inquiries</h4>
                <p>press@noiceland.co</p>
            </li>
        
            <li>
                <span class="counter"></span>
                <h4>Pontenctial Contribuitors</h4>
                <p>collab@noiceland.co</p>
            </li>
            </li>
        </ol>
    </div>

</section>

</main>


<?php get_footer(); ?>