// BANNER
let slideIndex = 0;
showSlides();

// Next/previous controls
function plusSlides(n) {
  showManualSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showManualSlides((slideIndex = n));
}

function showManualSlides(n) {
  const slides = document.getElementsByClassName("mySlides");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (const slide of slides) {
    slide.style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}

function showSlides() {
  const slides = document.getElementsByClassName("mySlides");

  for (const slide of slides) {
    slide.style.display = "none";
  }

  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 4500);
}

// PAGINATION
document.addEventListener("DOMContentLoaded", function () {
  const itemsPerPage = 16; // Số sản phẩm trên mỗi trang
  const products = document.querySelectorAll(".product__item");
  const paginationContainer = document.getElementById("pagination-container");

  function displayPage(page) {
    // Ẩn tất cả các sản phẩm
    products.forEach((product) => (product.style.display = "none"));

    // Hiển thị các sản phẩm của trang hiện tại
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;

    for (let i = start; i < end && i < products.length; i++) {
      products[i].style.display = "block";
    }

    // Cập nhật trạng thái của các nút phân trang
    const pageLinks = paginationContainer.querySelectorAll("a");
    pageLinks.forEach((link) => link.classList.remove("active"));
    pageLinks[page - 1].classList.add("active");
  }

  function setupPagination() {
    const pageCount = Math.ceil(products.length / itemsPerPage);

    for (let i = 1; i <= pageCount; i++) {
      const pageLink = document.createElement("a");
      pageLink.href = "#";
      pageLink.textContent = i;
      pageLink.addEventListener("click", function (event) {
        event.preventDefault();
        displayPage(i);
      });
      paginationContainer.appendChild(pageLink);
    }

    // Hiển thị trang đầu tiên
    displayPage(1);
  }

  setupPagination();
});
function kiemTraScriptTrongBinhLuan(commentText) {
  // Biểu thức chính quy để phát hiện script trong nội dung bình luận
  const scriptPattern = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi;

  // Kiểm tra xem nội dung bình luận có chứa script hay không
  if (scriptPattern.test(commentText)) {
    return false; // Nếu có script, trả về false
  } else {
    return true; // Nếu không có script, trả về true
  }
}

// Ví dụ sử dụng
const commentText1 = "Đây là nội dung bình luận hợp lệ.";
const commentText2 =
  "Đây là nội dung <script>alert('Xin chào');</script> bình luận có chứa script.";

console.log(kiemTraScriptTrongBinhLuan(commentText1)); // Kết quả: true
console.log(kiemTraScriptTrongBinhLuan(commentText2)); // Kết quả: false
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
