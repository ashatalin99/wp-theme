<?php  
  $theme_directory = get_template_directory_uri();
  $uploads_directory_array = wp_upload_dir();
  $uploads_directory_url = $uploads_directory_array['baseurl'];
?>
<header class="flex justify-center items-center">
    <div class="logo">
      <img src="<?php echo $uploads_directory_url . '/2025/01/logo.webp'; ?>" />
    </div>
    <div class="card_info flex justify-center flex-col">
      <p>Обслуживание и ремонт легковых автомобилей Volvo и Geely</p>
      <div class="max-w-[262px] flex self-center mt-4">
        <img src="<?php echo $uploads_directory_url . '/2025/01/payment.png'; ?>" />
      </div>
    </div>
    <ul class="flex flex-row">
      <li>
        <div class="w-[12px]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
          </svg>
        </div>
      
        <strong>Звоните нам</strong>
        <a href="tel:+74951506041"><span>+7 (495) 150 60 41</span></a>
        Консультация бесплатно
      </li>
      <li>
        <div class="w-[12px]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
          </svg>
        </div>        
        <strong>Мы работаем</strong>
        <span>09:00 - 21:00</span>
        Без перерывов
      </li>
    </ul>
</header>