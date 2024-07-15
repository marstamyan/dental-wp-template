//popup form ajax
;(function () {
  document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll(".modal-form")
    const modal = document.querySelector(".form-modal")
    const modalInfo = document.querySelector(".modal-info")
    const modalTitle = modalInfo.querySelector(".modal-info-title")

    let ajaxData = ajax_forms_data
    let ajaxurl = ajaxData.ajaxurl
    let nonce = ajaxData.nonce
    let successMessage = ajaxData.success_message
    let errorMessage = ajaxData.error_message

    forms.forEach(function (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault()
        let formData = new FormData(form)
        formData.append("nonce", nonce)
        fetch(ajaxurl, {
          method: "POST",
          body: formData,
        })
          .then((response) => {
            if (!response.ok) {
              throw new Error("Network response was not ok")
            }
            return response.text()
          })
          .then((data) => {
            if (data === "success") {
              modal.classList.remove("modal-active")
              modalInfo.classList.add("modal-active")
              modalTitle.textContent = successMessage
            } else {
              modal.classList.remove("modal-active")
              modalInfo.classList.add("modal-active")
              modalTitle.textContent = errorMessage + data
            }
          })
          .catch((error) => {
            modal.classList.remove("modal-active")
            modalInfo.classList.add("modal-active")
            modalTitle.textContent = errorMessage + error.message
          })
      })
    })
  })
})()
