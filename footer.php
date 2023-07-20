<?php wp_footer(); ?>
<?php
$networks = carbon_get_theme_option('networks');
$menus = carbon_get_theme_option('footer_menu');
?>

<footer>
    <div>
        <div>
            <p>CONTACT</p>
            <p><?php echo carbon_get_theme_option('contact'); ?></p>
        </div>
        <div>
            <p>NOUS SITUER</p>
            <p><?php echo carbon_get_theme_option('location'); ?></p>
        </div>
        <div>
            <p>AU SUJET DE KINNARPS</p>
            <ul>
                <?php
                foreach ($menus as $menu) {
                    $menu_title = isset($menu['menu_item_title']) ? $menu['menu_item_title'] : '';
                    $menu_url = isset($menu['url']) ? esc_url($menu['url']) : '#';
                ?>
                    <li>
                        <a href=" <?php echo $menu_url; ?>">
                            <?php echo $menu_title; ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <ul>
        <?php
        foreach ($networks as $network) {
            $icon_url = wp_get_attachment_url($network['icon']);
            $link_url = isset($network['url']) ? esc_url($network['url']) : '#';
        ?>
            <li>
                <a href="<?php echo $link_url; ?>">
                    <img src="<?php echo esc_url($icon_url); ?>" alt="Icon">
                </a>
            </li>
        <?php
        }
        ?>
    </ul>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/splide.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/index.js"></script>

</body>

</html>