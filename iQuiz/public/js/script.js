const body = document.querySelector('body'),
      sidebar = body.querySelector('.sidebar'),
      sidebarToggle = body.querySelector('.sidebar-toggle'),
      searchBtn = body.querySelector('.search-box'),
      modeSwitch = body.querySelector('.mode-switch'),
      modeIcons = modeSwitch.querySelectorAll('i');

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('close');
});

modeSwitch.addEventListener('click', () => {
    body.classList.toggle('dark');
});