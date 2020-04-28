        <footer>
            <p>This is my footer.</p>
            <!--below is the location set for the menu-->
            <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>  
        </footer>
        <?php 
            wp_footer();
        ?>
    </body>
</html>    