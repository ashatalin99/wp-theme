<?php  
  $theme_directory = get_template_directory_uri();
  $uploads_directory_array = wp_upload_dir();
  $uploads_directory_url = $uploads_directory_array['baseurl'];
?>
<header class="flex justify-center items-center">
  This is header
</header>