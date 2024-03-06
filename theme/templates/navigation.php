<!-- prettier-ignore -->
<?php if (function_exists("the_custom_logo")) {
    $custom_logo_id = get_theme_mod("custom_logo");
    $logo = wp_get_attachment_image_src($custom_logo_id, $size = "medium");
} ?>

<nav
  class="sticky top-0 bg-white transition-all duration-300 max-md:grid max-md:grid-rows-navbar-closed md:flex md:items-center md:justify-between"
  data-script="navigation"
>
  <div class="flex h-16 items-center justify-between">
    <a href="/">
      <img
        class="max-h-11 w-36 object-contain"
        src="<?= $logo[0] ?>"
        alt="logo"
      />
    </a>

    <button
      class="after:block after:size-11 after:bg-black after:content-empty after:mask-[url('/src/images/heroicons/bars-3.svg')] after:mask-no-repeat after:mask-size-contain after:mask-position-center md:hidden"
      data-ref="toggle-button"
    >
      <spam class="sr-only">toggle menu</spam>
    </button>
  </div>
  <!-- prettier-ignore -->
  <?php wp_nav_menu([
    "menu" => "Navbar Menu",
    "container" => "",
    "menu_class" =>
        "navigation-menu",
  ]); ?>
</nav>
