document.addEventListener("DOMContentLoaded", (event) => {
  const menuItems = document.querySelectorAll(".menu__sub1 > li");

  menuItems.forEach((item) => {
    item.addEventListener("click", (e) => {
      // Ngăn chặn sự kiện click lan truyền lên các phần tử cha
      e.stopPropagation();

      // Đóng tất cả các menu con khác
      menuItems.forEach((i) => {
        if (i !== item) {
          i.classList.remove("active");
        }
      });

      // Bật hoặc tắt lớp active cho mục được click
      item.classList.toggle("active");
    });
  });

  // Đóng menu con khi click bên ngoài menu
  document.addEventListener("click", () => {
    menuItems.forEach((item) => {
      item.classList.remove("active");
    });
  });
});
document.addEventListener("keydown", function (event) {
  if (event.ctrlKey) {
    event.preventDefault();
  }

  if (event.keyCode == 123) {
    event.preventDefault();
  }
});
document.addEventListener(
  "contextmenu",

  (event) => event.preventDefault()
);
