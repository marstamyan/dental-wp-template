// mobile menu
;(function () {
  const menuBurger = document.querySelector(".toggle-menu")
  const mobileMenu = document.querySelector(".mobile-menu")

  menuBurger.addEventListener("click", () => {
    menuBurger.classList.toggle("toggle")
    mobileMenu.classList.toggle("active")
  })
})()

// swiper
;(function () {
  const reviewsSwiper = new Swiper(".reviews-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerView: 1,
    loop: true,

    autoplay: {
      delay: 3000,
      disableOnInteraction: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  })
})()

// modal
;(function () {
  const showBtns = document.querySelectorAll(".show-modal");
  const closeBtns = document.querySelectorAll(".close-modal");
  const maskModal = document.querySelector(".mask-modal");
  const modals = document.querySelectorAll(".modal");

  showBtns.forEach((showBtn, index) => {
    showBtn.addEventListener("click", () => {
      maskModal.classList.add("active");
      modals[index].classList.add("modal-active");
    });
  });

  closeBtns.forEach((closeBtn) => {
    closeBtn.addEventListener("click", () => {
      const modal = closeBtn.closest(".modal");
      modal.classList.remove("modal-active");
      maskModal.classList.remove("active");
    });
  });

  maskModal.addEventListener("click", () => {
    maskModal.classList.remove("active");
    modals.forEach((modal) => {
      modal.classList.remove("modal-active");
    });
  });

  document.addEventListener("keyup", (e) => {
    if (e.keyCode == 27) {
      closeAllModals();
    }
  });

  function closeAllModals() {
    maskModal.classList.remove("active");
    modals.forEach((modal) => {
      modal.classList.remove("modal-active");
    });
  }
})();



// modal validation
;(function () {
  document.addEventListener("DOMContentLoaded", function () {
    var form = document.querySelector(".modal-form")
    var inputs = form.querySelectorAll("input")
    var submitButton = form.querySelector("button")

    function checkValidity() {
      var isValid = true
      inputs.forEach(function (input) {
        if (!input.value.trim()) {
          isValid = false
        }

        if (input.type === "tel") {
          var phoneValue = input.value.trim()
          if (phoneValue !== "" && !/^\+?[\d\s()-]+$/.test(phoneValue)) {
            isValid = false
            input.classList.add("invalid")
          } else {
            input.classList.remove("invalid")
          }
        }
      })
      submitButton.disabled = !isValid
    }

    inputs.forEach(function (input) {
      input.addEventListener("input", checkValidity)

      if (input.type === "tel") {
        input.addEventListener("input", function () {
          if (!/^\d+$/.test(input.value.trim())) {
            input.classList.add("invalid")
          } else {
            input.classList.remove("invalid")
          }
        })
      }
    })

    form.addEventListener("submit", function (event) {
      checkValidity()
      if (!submitButton.disabled) {
        return
      } else {
        event.preventDefault()
      }
    })
  })
})()
